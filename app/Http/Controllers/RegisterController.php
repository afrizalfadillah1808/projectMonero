<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mentor;

class RegisterController extends Controller
{
    public function registerAccount() {
        return view('register.index', [
            'title' => 'Register'
        ]);
    }

    public function storeAccount(Request $request) {
        $request->validate([
            'name' => 'required',
            'username' => 'required|min:5',
            'email' => 'required|email',
            'password' => 'required|min:5'
        ]);

        Mentor::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect('/login')->with('success','Register Success!');
    }
}
