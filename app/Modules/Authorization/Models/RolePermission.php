<?php

namespace App\Modules\Authorization\Models;

use App\BaseClasses\BaseModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class RolePermission extends BaseModel
{
	use SoftDeletes;

	public const CREATED_AT = 'role_perm_created_at';
	public const UPDATED_AT = 'role_perm_updated_at';
	public const DELETED_AT = 'role_perm_deleted_at';

	protected $table = 'role_permissions';
	protected $primaryKey = 'role_perm_id';
	protected string $activeColumn = 'role_perm_is_active';

	protected $fillable = ['role_perm_role_id', 'role_perm_perm_id', 'role_perm_is_active'];

	public function role(): BelongsTo
	{
		return $this->belongsTo(Role::class, 'role_perm_role_id', 'role_id');
	}

	public function permission(): BelongsTo
	{
		return $this->belongsTo(Permission::class, 'role_perm_perm_id', 'perm_id');
	}
}