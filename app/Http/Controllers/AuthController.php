<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{
    public function index(){
        if ($user = Auth::user()) {
            if ($user->level == 'admin') {
                return redirect()->intended('kamar');
            } elseif ($user->level == 'customer') {
                return redirect()->intended('home');
            }
        }
        return view('login');
        
    }

    public function proseslogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $kredensil = $request->only('email','password');
// hak akses:misahin guru sama admin
        if (Auth::attempt($kredensil)){
            $user = Auth::user();
            if($user->level == 'admin'){
                return redirect()->intended('kamar');
            }elseif($user->level == 'customer'){
                return redirect()->intended('home');
            }
            return redirect()->intended('/');
        }
        return redirect('login')->withInput()->withErrors(['login_gagal' => 'These credentials do not match our records.']);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function register(){
        return view('register');
    }
}