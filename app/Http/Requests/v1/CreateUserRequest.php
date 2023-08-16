<?php

namespace App\Http\Requests\v1;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\Rules\Password;

class CreateUserRequest extends FormRequest
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
            "username" => ['required', 'alpha_dash:ascii', 'unique:users', 'max:255'],   
            "password" => ['required', 'confirmed', Password::min(8)->letters()->numbers()->mixedCase()->symbols()],
            "first_name" => ['required', 'string', 'min:1'],
            "last_name" => ['required', 'string', 'min:1'],
            "email" => ['required', 'email', 'unique:users'],
            "contact_number" => ['required', 'string', 'min:10'],
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
