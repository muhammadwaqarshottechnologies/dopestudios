<?php

namespace App\Modules\Authorization\Services;

use App\BaseClasses\BaseService;
use App\Modules\Authorization\Repositories\PermissionRepository;
use App\Modules\Authorization\Repositories\RoleRepository;
use App\Modules\User\Models\User;

class AuthorizationService extends BaseService
{
	public function __construct(private RoleRepository $roleRepository, private PermissionRepository $permissionRepository)
	{
		//
	}

	public function userHasPermissions(User $user): void
	{
		$this->permissionRepository->getUserPermissions($user);
	}
}