<?php

namespace App\Repositories;

use App\Models\User;

class StaticUserRepository implements UserRepositoryContract
{
    public function byId(int $id):User {
         $user = new User();
         $user->id = $id;
         $user->name = 'name 1';
         $user->email = 'name1@gmail.com';

         return $user;
    }
} 