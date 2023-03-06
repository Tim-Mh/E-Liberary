<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Users;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class loginController extends Controller
{
    //
    public function login(){
        // dd('login page');
    
        return view('auth.login');
    }

    // public function register(){
    //     // dd('login page');
    //     return view('auth.register');
    // }
    public function user(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
    
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                        ->withSuccess('Signed in');
        }
   
        return redirect("login")->withSuccess('Login details are not valid');
    }

    public function create(Request $request){
        // dd($request->all());
        $user = new User();
        if($request->confirm != $request->password){
            return redirect('register')->with('error','Both password are not matched!');
        }
        $user->name = $request->emp_name;
        $user->email = $request->emp_email;
        $user->password =Hash::make($request->password);
        $user->save();

        return view('index')->with('success','Registerd Successfully');
    }
}
