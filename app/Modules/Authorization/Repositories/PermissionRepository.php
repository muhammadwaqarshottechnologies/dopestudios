<?php

namespace App\Modules\Authorization\Repositories;

use App\BaseClasses\BaseRepository;
use App\Modules\User\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\DB;

class PermissionRepository extends BaseRepository
{
	public function getUserPermissions(User $user): Builder
	{
		DB::enableQueryLog();
		$user->load([
			'userRoles' => function (HasMany $userRole) {
				$userRole->select('user_role_id', 'user_role_role_id', 'user_role_user_id', 'user_role_is_active')->with([
					'role' => function (BelongsTo $role) {
						$role->select('role_id', 'role_name', 'role_slug')->with([
							'rolePermissions' => function (HasMany $rolePermissions) {
								$rolePermissions->select('role_perm_id', 'role_perm_perm_id', 'role_perm_role_id', 'role_perm_is_active')->with([
									'permission' => function (BelongsTo $permission) {
										$permission->select('perm_id', 'perm_name', 'perm_slug');
									}
								]);
							}
						]);
					}
				]);
			}
		]);

		dd(DB::getQueryLog());
	}
}