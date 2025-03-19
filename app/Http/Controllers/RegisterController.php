<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function showRegisterForm()
    {
        return view('Public.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    
        $user = User::create([
            'name' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
    
        Auth::login($user);
    
        // Check email domain and redirect accordingly
        if (str_ends_with($user->email, '@admin.com')) {
            return redirect()->route('dashboard')->with('success', 'Registration successful!');
        }
    
        return redirect()->route('home')->with('success', 'Registration successful!');
    }

    // Show the login form
    public function showLoginForm()
    {
        return view('Public.login');
    }

    // Handle user login
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);
    
        $credentials = $request->only('email', 'password');
    
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
    
            // Check email domain and redirect accordingly
            if (str_ends_with($user->email, '@admin.com')) {
                return redirect()->route('dashboard')->with('success', 'Login successful!');
            }
    
            return redirect()->route('home')->with('success', 'Login successful!');
        }
    
        return back()->withErrors(['email' => 'Invalid credentials!'])->withInput();
    }
}
