<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function index()
    {
        return view('web.user.sections.login');
    }

    public function login(Request $request)
    {
        $validasi = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);


        if (Auth::attempt($validasi)) {
            if (Auth::user()->status !== 1) {
                Auth::logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();
                return back()->with('LoginGagal', 'Login anda gagal!');
            }
            $request->session()->regenerate();
            return redirect()->route('user.home')->with('LoginSukses', 'Selamat Anda Berhasil Login');
        }
        return back()->with('LoginGagal', 'Login anda gagal!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('user.login');
    }
}
