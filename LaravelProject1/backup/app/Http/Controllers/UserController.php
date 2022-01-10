<?php

namespace App\Http\Controllers;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use App\Models\User;
use App\Jobs\VerifyUserEmail;
use App\Events\UserEmailVerified;
use App\Mail\UserRegister;
use Illuminate\Support\Facades\Mail;


class UserController extends Controller
{
    private $userRepository;
    
    public function __construct(UserRepository $userRepository) {
        $this->userRepository = $userRepository;
    }


    public function user($id) {

        if (!$user = User::find($id)) {
            abort(404);
        }

        return view('user.profile', ['user' => User::find($id)]);
            
    }

    public function list() {
        return view('user.list', ['users' => User::all()]);
    }

    public function create() {
      
        return view('user.create');
        
    }



    public function update() {
        
        $user->save();
    }

    public function delete() {
        return $user->delete();
        //return redirect('/');
    }
    
    public function fullName($id) {
        $user = User::find($id);
        
       dd ($user->full_name);
    }

    public function store(Request $request)
    {
        $user = new User();
        $user->name = 'test name';
        $user->email = time().'@gmail.com';
        $user->password = '1234567890SDFGH';
        $user->email_verified_at = null;
        $user->last_name = 'test last name';
        $user->save();

        VerifyUserEmail::dispatch($user);

        UserEmailVerified::dispatch($user);

        Mail::to($user)->send(new UserRegister($user));

        $user = User::find(167);
        return(new UserRegister($user))->render();
    }
    
};
