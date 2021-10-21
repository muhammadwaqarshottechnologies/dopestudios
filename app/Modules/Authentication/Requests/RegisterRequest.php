<?php

namespace App\Modules\Authentication\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class RegisterRequest extends FormRequest
{
	/** @noinspection PhpArrayShapeAttributeCanBeAddedInspection */
	final public function rules(): array
    {
        return [
            'user_first_name' => ['required', 'string', 'max:255'],
            'user_middle_name' => ['sometimes', 'string', 'max:255'],
            'user_last_name' => ['required', 'string', 'max:255'],
            'user_nick_name' => ['sometimes', 'string', 'max:255'],
            'user_username' => ['required', 'string', 'max:255', 'unique:users'],
            'user_email' => ['required', 'string', 'max:255', 'unique:users'],
            'user_password' => ['required', 'string', 'max:255', 'confirmed', Password::min(8)->mixedCase()->numbers()->symbols()],
            'user_profile_picture' => ['sometimes', 'max:5242880', 'image'],
            'user_cover_picture' => ['sometimes', 'max:5242880', 'image'],
        ];
    }
}
