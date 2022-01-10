<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function list() {
        return view('users-list', ['users' => User::all(), 'first_name' => '', 'email' => '']);
        //return view('users-list', ['users' => User::paginate(15)]);
    }

    public function create() {
      
        return view('user-create');
        
    }

    public function post(Request $request)
    {
        $user = new User();
        $user->status=$request->status;
        $user->first_name=$request->first_name;
        $user->last_name=$request->last_name;
        $user->phone_number=$request->phone_number;
        $user->email=$request->email;

        $user->save();

        return redirect('/users/list');
    }

    public function delete($id) 
    {
        $user = User::find($id);  

        $user->delete();
        
        return redirect('/users/list');
    }

    public function edit($id) {

        $user = User::find($id);

        return view('users-edit', ['user'=>$user, 'id'=>$user->id]);

        
    }

    public function saveChanges(Request $request) {

        $id = $request->id;

        $user =  User::find($id);
        
         $user->status=$request->status;
         $user->first_name=$request->first_name;
         $user->last_name=$request->last_name;
         $user->phone_number=$request->phone_number;
         $user->email=$request->email;

        $user->save();

        return redirect('/users/list');
    }

    public function search(Request $request)
    {    
        $first_name = $request->first_name;
        $email = $request->email;
        $status = $request->status;
        
        $user = User::where('first_name', $first_name)->orWhere('email', $email)->orWhere('status',$status)->get();
        
        return view('users-list', ['users' => $user, 'first_name' => $first_name, 'email' => $email]);
    }

}
