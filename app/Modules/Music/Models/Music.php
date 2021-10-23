<?php

namespace App\Modules\Music\Models;

use App\BaseClasses\BaseModel;
use App\Modules\User\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Music extends BaseModel
{
	public const CREATED_AT = 'music_created_at';
	public const UPDATED_AT = 'music_updated_at';
	public const DELETED_AT = 'music_deleted_at';

	protected $table = 'music';
	protected $primaryKey = 'music_id';
	protected string $activeColumn = 'music_is_active';

	protected $fillable = ['music_user_id', 'music_name', 'music_slug', 'music_is_active'];

	public function user(): BelongsTo
	{
		return $this->belongsTo(User::class, 'music_user_id', 'user_id');
	}
}