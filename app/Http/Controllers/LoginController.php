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
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            if(Auth::user()->level != 'Kepsek'){

                $perusahaan = Auth::user()->id_perusahaan;
                $data = Pelamar::where('id_perusahaan', $perusahaan)->get();
                
                return redirect('/dashboard');
            } else {
                return redirect('/kepsek');
            }
        }
        return redirect()->route('login');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
