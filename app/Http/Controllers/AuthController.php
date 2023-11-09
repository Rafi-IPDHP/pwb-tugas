<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login() {
        return view('auth.login');
    }

    public function prosesAnggota(Request $request) {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $credential = $request->only('username', 'password');
        if(Auth::guard('web')->attempt($credential)) {
            $request->session()->regenerate();
            return redirect()->route('anggota.index');
        }

        return redirect()->route('blank_page');
    }

    public function prosesPetugas(Request $request) {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('username', 'password');
        if(Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('petugas.index');
        }

        return redirect()->route('blank_page');
    }

    public function logout(Request $request, Auth $auth) {
        $auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('blank_page');
    }
}
