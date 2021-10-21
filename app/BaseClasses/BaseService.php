<?php

namespace App\BaseClasses;

use Closure;
use Throwable;
use Illuminate\Support\Facades\DB;

class BaseService
{
	protected function wrapWithTransaction(Closure $callback): mixed
	{
		try {
			return DB::transaction(function () use ($callback) {
			    return $callback();
			});
		} catch (Throwable) {
			return view('Exceptions::500');
		}
	}
}
