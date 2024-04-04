<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function postUser(Request $request)
    {

        $request->validate([
            'phone' => 'size:11',
            'email' => 'unique:users',

        ]);


        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'user_type' => $request->position,
            'phone' => $request->phone,
            'address' => $request->address,
            'gender' => $request->gender,
            'date_of_join' => $request->doj,
            'image' => $img_url,

        ]);

        return redirect('/userlist');
    }
}
