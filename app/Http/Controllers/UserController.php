<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    
    public function postSignUp(Request $request)
    {
        //   validating all names from signup page before storing user user table create
        $request->validate([

            'email' => 'required|unique:users',
            'password' => 'required|min:4',
            'role' => 'required'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => strtolower($request->role),
        ]);


        // dd($user);
        Auth::attempt(['email' => $user->email, 'password' => $request->password]); //for keeping user info to session
        // dd (Auth::user());
        if ($user->role == 'admin') {
            return redirect('/dashboard');
        } else {
            return redirect('/customer_productlist');
        }
    }

    public function postLogin(Request $request)
    {
        // $request->validate([
        //     'password' => 'required|min:5',
        //     'email' => 'required',
        // ]);

        $credentials = ['email' => $request->email, 'password' => $request->password];

        $check = Auth::attempt($credentials);

        if ($check) {  //user present

            if (Auth::user()->role == 'admin') {
                return redirect('/dashboard');
            }
            else {
                return redirect('/customer_productlist');
            }
            
        } else {
            //not authenticAated
            return redirect()->back();
        }
    }
}
