<?php

namespace App\Modules\User\Services;

use App\BaseClasses\BaseService;
use App\Modules\User\DTOs\CreateUserDTO;
use App\Modules\User\Models\User;
use App\Modules\User\Repositories\UserRepository;
use Illuminate\Database\Eloquent\Collection;

class UserService extends BaseService
{
	public function __construct(private UserRepository $userRepository)
	{
		//
	}

	/**
	 * @return Collection
	 */
	public function getUserList(): Collection
	{
		return $this->userRepository->getUserList();
	}

	public function createUser(CreateUserDTO $createUserDTO): User
	{
		return $this->wrapWithTransaction(function () use ($createUserDTO) {
			$this->userRepository->createUser(createUserDTO: $createUserDTO);
		});
	}
}