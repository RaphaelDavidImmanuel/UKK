<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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

    public function store(Request $request){
        // dd($request -> all());
        $validdateDate = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:3|max:255|unique:users',
            'email' => 'required|unique:users',
            'password' => 'required|min:5|max:255',
            'level' => 'required'
        ]);

        $validdateDate['password'] = Hash::make($validdateDate['password']);
        User::create($validdateDate);
        return redirect()->route('login')->with('success', 'Create Success !!');
    }
}