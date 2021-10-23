<?php

namespace App\Modules\User\Repositories;

use App\Modules\Authorization\Services\AuthorizationService;
use App\Modules\User\Models\User;
use App\BaseClasses\BaseRepository;
use App\Modules\User\DTOs\CreateUserDTO;
use Illuminate\Database\Eloquent\Collection;

class UserRepository extends BaseRepository
{
	public function __construct(private AuthorizationService $authorizationService)
	{
		//
	}

	public function getUserList(): Collection|array
	{
		$this->authorizationService->userHasPermissions(User::find(1));
		return User::whereUserUsername('rypuxewy')->get();
	}

	/**
	 * @param string|int $user
	 * @return User
	 */
	public function getUser(string|int $user): User
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