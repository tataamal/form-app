<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function index(){
        return view('login.login',[
            'title'=>'Login'
        ]);
    }

    public function register(){
        return view('login.register');
    }

    public function login(Request $request) {
        $request->validate([
            'username'=>'required',
            'password' =>'required'
        ],[
            'username.required'=>'Username Harus di isi',
            'password.required'=>'Password Harus di isi'
        ]);

        $infoLogin = [
            'username'=>$request->username,
            'password'=>$request->password
        ];

        if(Auth::attempt($infoLogin)){
            //jika otentikasi berhasil
            if(Auth::user()->role == 'admin') {
                return redirect('admin/dashboard');
            }
            elseif(Auth::user()->role == 'user') {
                return redirect('user/dashboard');
            }
        }else{
            //jika otentikasi gagal
            return redirect('login')->withErrors('Username atau password tidak sesuai')->withInput();

        }
    }

    public function store(Request $request){
        $request->validate([
            'username'=>'required|unique',
            'name'=>'required',
            'email'=>'required|unique',
            'password'=>'required',
            'role'=>'required'
        ]);


    }

    public function logout(){
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/');
    }


}
