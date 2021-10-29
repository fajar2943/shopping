<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return User::all();
    }

    public function store(Request $request)
    {
        $user = User::create([
            'username' => $request->username, 'email' => $request->email,
            'encrypted_password' => bcrypt($request->encrypted_password),
            'remember_token' => uniqid(),
            'phone' => $request->phone, 'address' => $request->address,
            'city' => $request->city, 'country' => $request->country,
            'name' => $request->name, 'postcode' => $request->postcode
        ]);

        return ['email' => $user->email, 'remember_token' => $user->remember_token, 'username' => $user->username];
    }

    public function sign_in(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        return ['email' => $user->email, 'remember_token' => $user->remember_token, 'username' => $user->username];
    }
}
