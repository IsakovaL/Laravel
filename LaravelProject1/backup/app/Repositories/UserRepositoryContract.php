<?php

namespace App\Repositories;

use App\Models\User;

interface UserRepositoryContract
{
    public function byId(int $id):User;  
} 