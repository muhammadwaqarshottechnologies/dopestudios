<?php

namespace App\Modules\User\Models;

use App\Modules\Authentication\AuthenticatableEntity;
use App\Modules\Authorization\Models\Role;
use App\Modules\Authorization\Models\UserRole;
use App\Modules\Music\Models\Music;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends AuthenticatableEntity
{
	use SoftDeletes;

	public const CREATED_AT = 'user_created_at';
	public const UPDATED_AT = 'user_updated_at';
	public const DELETED_AT = 'user_deleted_at';

	protected $table = 'users';
	protected $primaryKey = 'user_id';
	protected string $activeColumn = 'user_is_active';
	protected $rememberTokenName = 'user_remember_token';

	protected $fillable = [
		'user_first_name', 'user_middle_name', 'user_last_name', 'user_nickname',
		'user_username', 'user_email', 'user_password', 'user_profile_picture',
		'user_cover_picture', 'user_is_active',
	];

	protected $hidden = ['user_password', 'user_remember_token'];

	protected $casts = [
		'email_verified_at' => 'datetime',
		'user_is_active' => 'bool',
	];

	public function getAuthPassword()
	{
		return $this->user_password;
	}

	public function music(): HasMany
	{
		return $this->hasMany(Music::class, 'music_user_id', 'user_id');
	}

	public function userRoles(): HasMany
	{
		return $this->hasMany(UserRole::class, 'user_role_user_id', 'user_id');
	}

	public function roles(): BelongsToMany
	{
		return $this->belongsToMany(
			Role::class,
			'user_roles',
			'user_role_user_id',
			'user_role_role_id',
			'user_id',
			'role_id',
		);
	}
}
