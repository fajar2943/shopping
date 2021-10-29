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

    public function create(Request $request)
    {
        $user = User::create([
            'username' => $request->username, 'email' => $request->email,
            'encrypted_password' => bcrypt($request->encrypted_password),
            'phone' => $request->phone, 'address' => $request->address,
            'city' => $request->city, 'country' => $request->country,
            'name' => $request->name, 'postcode' => $request->postcode
        ]);

        return 'Data berhasil disimpan';
    }

    public function sign_in(Request $request)
    {
        return $request;
    }
}
