<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class registeredController extends Controller
{
    public function createuser(Request $request){
        $request->validate([
            'name'=>'required|string|max:255',
            'email'=>'required|string|max:255|email',
            'username'=>'required|string|max:255|unique:registred',
            'password'=>'required|string|min:8'
        ]);
        $name= $request->input('name');
        $email= $request->input('email');
        $password= $request->input('password');
        $username= $request->input('username');

        $user = new registered();
        $user->name= $name;
        $user->email=$email;
        $user->username=$username;
        $user->password= Hash::make($password);
        
        $user->save();
        return redirect()->back();

    }
    public function login(Request $request){
        
        $credentials = $request->only('username','password');

        if (Auth::attempt($credentials)) {

            $user = Auth::registered();
            $request->session()->put('SessionName' , $user->username);
            return redirect()->intended('/welcome');    
        }

        
        return redirect()->back()->withInput($request->only('username'))->withErrors([
            'username' => 'Invalid username or password.', // Change 'email' to 'username'
        ]);
    }
}
