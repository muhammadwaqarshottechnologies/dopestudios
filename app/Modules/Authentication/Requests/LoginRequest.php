<?php

namespace App\Modules\Authentication\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
	/** @noinspection PhpArrayShapeAttributeCanBeAddedInspection */
	final public function rules(): array
    {
        return [
            'user_email' => ['required', 'string', 'max:255', 'unique:users'],
            'user_password' => ['required', 'string', 'max:255'],
        ];
    }
}
