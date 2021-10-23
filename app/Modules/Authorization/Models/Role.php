<?php

namespace App\Modules\Authorization\Models;

use App\BaseClasses\BaseModel;
use App\Modules\User\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends BaseModel
{
	use SoftDeletes;

	public const CREATED_AT = 'role_created_at';
	public const UPDATED_AT = 'role_updated_at';
	public const DELETED_AT = 'role_deleted_at';

	protected $table = 'roles';
	protected $primaryKey = 'role_id';
	protected string $activeColumn = 'role_is_active';

	protected $fillable = ['role_slug', 'role_name', 'role_is_active'];

	public function rolePermissions(): HasMany
	{
		return $this->hasMany(RolePermission::class, 'role_perm_role_id', 'role_id');
	}

	public function permissions(): BelongsToMany
	{
		return $this->belongsToMany(
			Permission::class,
			'role_permissions',
			'role_perm_role_id',
			'role_perm_perm_id',
			'role_id',
			'perm_id',
		);
	}

	public function userRoles(): HasMany
	{
		return $this->hasMany(UserRole::class, 'user_role_role_id', 'role_id');
	}

	public function users(): BelongsToMany
	{
		return $this->belongsToMany(
			User::class,
			'user_roles',
			'user_role_role_id',
			'user_role_user_id',
			'role_id',
			'user_id',
		);
	}
}