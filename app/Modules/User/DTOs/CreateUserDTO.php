<?php

namespace App\Modules\User\DTOs;

use Spatie\DataTransferObject\DataTransferObject;

class CreateUserDTO extends DataTransferObject
{
	public string $user_first_name;
	public ?string $user_middle_name = null;
	public string $user_last_name;
	public ?string $user_nick_name = null;
	public string $user_username;
	public string $user_email;
	public string $user_password;
	public ?string $user_profile_picture = null;
	public ?string $user_cover_picture = null;
	public bool $user_is_active = true;
}