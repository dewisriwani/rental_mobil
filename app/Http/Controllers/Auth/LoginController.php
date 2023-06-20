<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    //memanggil halaman login
    function index()
    {
        return view('pages.Auth.login');
    }

    // memproses login
    function login(Request $request)
    {
        //memvalidasikan inputan form
        $input = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        //ngecek data inputan dengan data di databases, jika cocock login
        if(Auth::attempt($input)){
            return redirect()->to('/merk');
         } else {
            //balik ke halaman login karena gagal
            return redirect()->back();
        } 
    }

    function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->to('/login');
    }
    
}
