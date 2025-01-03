<?php

namespace App\Http\Controllers;


use index;
//use App\Mail\WelcomeMail;
use App\Models\User;
use App\Models\Country;
//use Illuminate\Foundation\Auth\User;
use App\Mail\WelcomeMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
//use App\Http\Controllers\Mail\WelcomeMail;
use Illuminate\Validation\Rules\Password;
use Symfony\Component\HttpFoundation\RedirectResponse;

class AuthController extends Controller
{
    public function loginpage()
    {
        return view('auth.login');
    }
    public function dologin(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/user/dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }


    public function index()
    {
        /*  return view('auth.register'); */
        $countries = Country::all();
        return view('auth.register', ['countries' => $countries]);
    }
    public function doregister(Request $request)
    {
        //dump($request->all());
        $validated = $request->validate([
            'name' => ['required', 'max:30', 'min:5'],
            'username' => ['required', 'unique:users,username'],
            'email' => ['required', 'email', 'unique:users,email'],
            'phone' => ['required'],
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
        for ($i = 0; $i < 10; $i++) {
            Mail::to($user->email)->queue(new WelcomeMail($user->username, $user->email, $user->name));
        }
        return redirect()->route('login')->with('success', 'Registration Successful');
        //return "Redirect successful!";
    }
}
