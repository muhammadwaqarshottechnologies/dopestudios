<?php

namespace App\Modules\Authorization\Models;

use App\BaseClasses\BaseModel;
use Illuminate\Database\Eloquent\SoftDeletes;

class Permission extends BaseModel
{
	use SoftDeletes;

	public const CREATED_AT = 'perm_created_at';
	public const UPDATED_AT = 'perm_updated_at';
	public const DELETED_AT = 'perm_deleted_at';

	protected $table = 'permissions';
	protected $primaryKey = 'perm_id';
	protected string $activeColumn = 'perm_is_active';

	protected $fillable = ['perm_slug', 'perm_name', 'perm_is_active'];
}