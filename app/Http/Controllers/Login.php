<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class Login extends Controller
{
    public function index(){
        $title = "Login Page";
        return view(view: 'login', data: compact('title'));
}
    public function auth(Request $request) {
        $validated = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if(Auth::attempt($validated)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        } else {
            return redirect('/login')->with(['failed' => 'Login wrong!']);
        }

}
    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}