<?php

namespace App\Http\Requests\v1;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\Hash;
use Closure;

// Models
use App\Models\v1\User;

class LoginAdminRequest extends FormRequest
{
    // Determine if the admin is authorized to make this request.

    public function authorize(): bool
    {
        return true;
    }

    // Get the validation rules that apply to the request.

    public function rules(): array
    {
        return [
            "username" => ['required', 'exists:users,username', function (string $attribute, mixed $value, Closure $fail)  {
                if (User::where('username', $this->username)->where('type', User::$admin_enum)->first()->doesntExist()) {
                    return $fail(__('Unautherized access.'));
                }
            }],   
            "password" => ['required', function (string $attribute, mixed $value, Closure $fail)  {
                if (!Hash::check($value, User::where('username', $this->username)->first()->password)) {
                    return $fail(__('The password is incorrect.'));
                }
            }],
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
