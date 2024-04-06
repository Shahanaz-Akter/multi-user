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

        $request->validate([
            'name' => 'required',
            'password' => 'required|size:5',
            'email' => 'required|unique:users',
            'role'=>'required'
        ]);


        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => strtolower($request->role),
           

        ]);

        if($user->role == 'Admin' || $user->role == 'admin'){
            Auth::attempt(['email'=>$user->email, 'password'=>$user->password]); //for keeping user info to session
            return redirect('/dashboard');
        }else{
            return redirect('/customer_productlist');
        }
    }
    public function postLogin(Request $request)
    {

        $request->validate([
            'password' => 'required|size:5',
            'email' => 'required',
        ]);

        $credentials = ['email'=>$request->email,
                        'password'=>$request->password];
        
        $check = Auth::attempt($credentials);

        if($check){  //user present
            if(Auth::user()->role=='admin' || Auth::user()->role=='Admin'){
                return redirect('/dashboard');
            }else{
                return redirect('/customer_productlist');
            }

        }else{
            //not authenticAated
            return redirect()->back();
        }

    }
}
