<?php

namespace App\Http\Controllers;
use illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function guestLogin(Request $request)
    {
        // Lakukan proses login sebagai tamu di sini, misalnya:
        Auth::loginUsingId(1); // Ganti ID dengan ID tamu Anda

        // Redirect to homeuser after login as guest
        return redirect()->route('homeuser');
    }

}
