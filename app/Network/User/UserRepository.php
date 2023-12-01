<?php

namespace App\Network\User;

use Illuminate\Support\Facades\File;

class UserRepository
{
    public static function getUsers() : array
    {
        $usersArr = File::json(base_path('storage/app/users.json'));

        if (is_array($usersArr) && isset($usersArr['users'])) {
            return $usersArr['users'];
        }

        return [];
    }
}
