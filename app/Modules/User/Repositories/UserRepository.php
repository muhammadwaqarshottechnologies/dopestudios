<?php

namespace App\Modules\User\Repositories;

use App\BaseClasses\BaseRepository;
use App\Modules\User\DTOs\CreateUserDTO;
use App\Modules\User\Models\User;
use Illuminate\Database\Eloquent\Collection;

class UserRepository extends BaseRepository
{
	public function __construct()
	{
		//
	}

	public function getUserList(): Collection | array
	{
		return User::all();
	}

	/**
	 * @param string|int $user
	 * @return User
	 */
	public function getUser(string | int $user): User
	{
		return User::active()->{is_string($user) ? 'whereUsername' : 'whereUserId'}($user)->findOrFail();
	}

	/**
	 * @param CreateUserDTO $createUserDTO
	 * @return User
	 */
	public function createUser(CreateUserDTO $createUserDTO): User
	{
		return User::create(attributes: $createUserDTO->toArray());
	}
}