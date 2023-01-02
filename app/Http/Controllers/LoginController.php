<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function loginAccount() {
        return view('login.index', [
            'title' => 'Login'
        ]);
    }

    public function loginAuth(Request $request) {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard')->with('info', 'Welcome Back ' . Auth::user()->name . '!');
        }

        return back()->with('warning','Invalid Login Credentials!');
    }

    public function logoutAuth(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('info', 'Logged Out!');
    }
}
