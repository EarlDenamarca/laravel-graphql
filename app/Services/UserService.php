<?php

namespace App\Services;

use App\Models\User;

class UserService
{
    public function findByEmail( String $email ) : ?User
    {
        return User::where( 'email', $email )->first();
    }
}