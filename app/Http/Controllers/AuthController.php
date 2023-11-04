<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login() {
        return view('auth.login');
    }

    public function prosesAnggota(Request $request) {
        $request->validate([
            'nama_anggota' => 'required',
            'password' => 'required'
        ]);

        // dd($request);

        return redirect()->route('anggota.index');
        // $credential = $request->only('nama_anggota', 'password');
        // if (Auth::attempt($credential)) {
            // $request->session()->regenerate();
        //         dd($request);
        // }
    }
}
