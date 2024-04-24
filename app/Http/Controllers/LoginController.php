<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    //  
    public function index()
    {
        return view('login.login', [
            'title' => 'login'
        ]);
    }


    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            "username" => "required",
            "password" => "required",
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }

        return back()->with('loginError', 'Login Failed!');
    }
}
