<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class LoginController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect()->route('daftarpengawas');
        }else{
            return view('login');
        }
    }

    public function loginproc(Request $request)
    {
        $data = [
            'nip_user' => $request->input('nip_user'),
            'password' => $request->input('password'),
        ];

        if (Auth::Attempt($data)) {
            return redirect()->route('daftarpengawas');
        }else{
            Session::flash('error', 'NIP atau Password Salah');
            return redirect()->route('login');
        }
    }

    public function logoutproc()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
