<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{

    private $userRepository;
    
    public function __construct(UserRepository $userRepository) {
        $this->userRepository = $userRepository;
    }


    public function search($name)
    {
        $users = $userRepository.users();

        foreach ($users as $user) {
            if ($user.name == $name) {
                return view('UserDetails', [
                    'user' => $user
                ]);
            }
        }
    }
}
