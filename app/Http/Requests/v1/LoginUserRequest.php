<?php

namespace App\Http\Requests\v1;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\Hash;
use Closure;

// Models
use App\Models\v1\User;

class LoginUserRequest extends FormRequest
{
    // Determine if the user is authorized to make this request.

    public function authorize(): bool
    {
        return true;
    }

    // Get the validation rules that apply to the request.

    public function rules(): array
    {
        return [
            "username" => ['required', 'exists:users,username'],   
            "password" => ['required', function (string $attribute, mixed $value, Closure $fail)  {
                try {   
                    if (!Hash::check($value, User::where('username', $this->username)->first()->password)) {
                        return $fail(__('The password is incorrect.'));
                    }
                } catch (\Throwable $th) {
                    //throw $th;
                }
            }],
        ];
    }

    // Custom error message
    
    public function messages(): array
    {
        return [
            'username.exists' => 'Username do not exists.',
        ];
    }

    // Handle a failed validation attempt.

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'success'   => false,
            'message'   => 'Validation errors',
            'error_code' => 001,
            'data'      => $validator->errors()
        ], 401));
    }
}
