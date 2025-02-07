<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register()
    {
        $fields = request()->validate([
            'full_name' => 'required|string|max:50',
            'email' => 'required|string|email|unique:users,email',
            'password' => ['required', 'string', 'min:4', 'confirmed', 'regex:/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/'],
        ], ['password.regex' => 'Password must contain at least one uppercase letter, one lowercase letter, one number, and one special character.'
        ]);

        $user = User::create($fields);
        Auth::login($user);

        return redirect()->route('home')->with('success', 'Registration Successfully!');
    }

    public function login()
    {
        $credentials = request()->validate([
            'email' => 'required|string|email|max:255',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials, request()->has('remember'))) {
            return redirect()->route('home')->with('success', 'Login Successfully!');
        } else {
            return back()->withErrors([
                'failed' => 'The provided credentials do not match our records.',
            ]);
        }
    }

    public function logout ()
    {
        Auth::logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect()->route('home')->with('success', 'Logout Successfully!');
    }
}
