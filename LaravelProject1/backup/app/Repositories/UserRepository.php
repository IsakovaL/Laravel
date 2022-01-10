<?php

namespace App\Repositories;

use App\Models\User;



class UserRepository implements UserRepositoryContract
{

public function byId(int $id):User {
    return User::find($id);
}



public function list()
{
    return $this->users();
}

    public function getById($id)
    {
        foreach ($this->users() as $user) {
            if ($user['id'] == $id) {
            return $user;
    }
    }

        return null;
}



    protected function users()
    {
        return [
            ['id' => 1, 'username' => 'user1', 'name' => 'Ivan'],
            ['id' => 2, 'username' => 'user2', 'name' => 'Dmitriy'],
            ['id' => 3, 'username' => 'user3', 'name' => 'Anton'],
        ];
    }
} 