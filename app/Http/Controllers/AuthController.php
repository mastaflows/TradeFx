<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;

class AuthController extends Controller
{
    public function loginpage() {}
    public function dologin() {}


    public function register()
    {
        /*  return view('auth.register'); */
        $countries = Country::all();
        return view('auth.register', ['countries' => $countries]);
    }
    public function doregister(Request $request)
    {
        // dump($request->all());
        $validated = $request->validate([
            'name' => ['required', 'max:30', 'min:5'],
            'username' => ['required', 'unique:users,username'],
            'email' => ['required', 'email', 'unique:users,email'],
            'phone' => ['required',],
            'country' => ['required'],
            'referral' => ['nullable'],
            'password' => ['required', 'confirmed', Password::default()]
        ]);

        $user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'phone' => $request->phone,
            'country' => $request->country,
            'referral' => $request->referral,
            'password' => Hash::make($request->password),

        ]);
    }
}
