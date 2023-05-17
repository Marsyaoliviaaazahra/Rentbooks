<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{   
    // register
    public function indexRegister(){
        return view('auth.register');
    }

    public function storeRegister(Request $request){

        $validateData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'no_hp' => 'required',
            'address' => 'required',
        ]);

        $validateData['password'] = bcrypt($validateData['password']);

        User::create($validateData);

        return redirect('/register')->with('success', 'Register berhasil!');

    }
    // login
    public function indexLogin(){
        return view('auth.login');
    }

    public function auth(Request $request){
        $login = $request->validate([
            'email' =>['required'],
            'password' =>['required']
        ]);

        if(Auth::attempt($login)){
            $request->session()->regenerate();

            return redirect()->intended('/user');
        }

        return back()->with('loginError', 'Login error!');
    }
    
}
