<?php

namespace App\Modules\User\Repositories;

use App\Modules\User\DTOs\CreateUserDTO;
use App\Modules\User\Models\User;
use App\BaseClasses\BaseRepository;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class UserRepository extends BaseRepository
{
	public function getUser(string | int $user): User
	{
		$user = User::active()->{is_string($user) ? 'whereUsername' : 'whereUserId'}($user)->find();

		if (!$user) {
			throw new ModelNotFoundException('User Not Found!');
		}

		return $user;
	}

	public function createUser(CreateUserDTO $createUserDTO): User
	{
		return User::create(attributes: $createUserDTO->toArray());
	}
}