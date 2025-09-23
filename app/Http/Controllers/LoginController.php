<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function login(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required|min:3'
        ]);

        if (Auth::attempt($validatedData)) {
            $request->session()->regenerate();

            return redirect()->intended(route('admin'))->with('success', 'Login Success!');
        }

        return back()->with('error', 'Login Failed!');
    }

    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect()->intended('/login')->with('success', 'Logout Success!');
    }
}