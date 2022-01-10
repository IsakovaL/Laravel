<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    public function list() {

        return view('admins-list', ['admins' => Admin::all(), 'first_name' => '', 'email' => '']);
    }

    public function create()
    {
        return view('admins-create');
    }

    public function post(Request $request)
    {
        $admin = new Admin();
        $admin->status=$request->status;
        $admin->first_name=$request->first_name;
        $admin->last_name=$request->last_name;
        $admin->email=$request->email;
        $admin->password=$request->password;
        $admin->save();

        return redirect('/admins/list');
    }

    public function delete($id) 
    {
        $admin = Admin::find($id);  

        $admin->delete();
        
        return redirect('/admins/list');
    }

    public function search(Request $request)
    {    
        $first_name = $request->first_name;
        $email = $request->email;
        $status = $request->status;
        
        $admin = Admin::where('first_name', $first_name)->orWhere('email', $email)->orWhere('status',$status)->get();
        
        return view('admins-list', ['admins' => $admin, 'first_name' => $first_name, 'email' => $email]);
    }
}
