<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginPage () {
        return view('admin.sign-in');
    }

    public function handleLogin (Request $request) {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('dashboardPage');
        } 

        return back()->withErrors([
            'email' => 'Email atau password salah',
        ])->withInput();
    }
}
