<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController {
    public function loginView() {
        return view('admin.auth.login');
    }

    public function loginPost(Request $request) {
        if (Auth::attempt(['email' => $request->post('email'), 'password' => $request->post('password')]))
        {
            return redirect(route('admin.home'));
        }
        return back()->withErrors(['email' => 'Incorrect email or password.']);
    }

    public function logout() {
        Auth::logout();
        return redirect(route('admin.auth.login'));
    }
}
