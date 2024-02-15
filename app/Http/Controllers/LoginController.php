<?php

namespace App\Http\Controllers;

use App\Models\Pelamar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use illuminate\support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function loginAction(Request $request)
    {
        // dd($request->all());

        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $perusahaan = Auth::user()->id_perusahaan;
            $data = Pelamar::where('id_perusahaan', $perusahaan)->get();
            
            return view('statisdoangcok.kepsek', $data);
        }
        return redirect()->route('login');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
