<?php

namespace App\Modules\Authorization\Models;

use App\BaseClasses\BaseModel;
use App\Modules\User\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserRole extends BaseModel
{
	public const CREATED_AT = 'user_role_created_at';
	public const UPDATED_AT = 'user_role_updated_at';
	public const DELETED_AT = 'user_role_deleted_at';

	protected $table = 'user_roles';
	protected $primaryKey = 'user_role_id';
	protected string $activeColumn = 'user_role_is_active';

	protected $fillable = ['user_role_user_id', 'user_role_role_id', 'user_role_is_active'];

	public function user(): BelongsTo
	{
		return $this->belongsTo(User::class, 'user_role_user_id', 'user_id');
	}

	public function role(): BelongsTo
	{
		return $this->belongsTo(Role::class, 'user_role_role_id', 'role_id');
	}
}