<?php

namespace App\Modules\Authentication;

use Illuminate\Auth\EloquentUserProvider;
use Illuminate\Contracts\Auth\Authenticatable;

class AuthenticatableEntityProvider extends EloquentUserProvider
{
    final public function retrieveByCredentials(array $credentials): ?Authenticatable
    {
        return parent::retrieveByCredentials([
            'user_email' => $credentials['user_email'],
            'password' => $credentials['user_password'],
            'user_is_active' => true,
        ]);
    }

    final public function validateCredentials(Authenticatable $user, array $credentials): bool
    {
        return $this->hasher->check($credentials['user_password'], $user->getAuthPassword());
    }
}
