<?php

namespace App\BaseClasses;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
	/**
	 * The active column name of the model
	 *
	 * @var string
	 */
	protected string $activeColumn = 'is_active';

	public function scopeActive(Builder $query): Builder
	{
		return $query->where($this->activeColumn, true);
	}

	public function scopeInActive(Builder $query): Builder
	{
		return $query->where($this->activeColumn, false);
	}
}
