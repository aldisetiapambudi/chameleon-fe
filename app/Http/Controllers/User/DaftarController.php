<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class DaftarController extends Controller
{
    public function index()
    {
        return view('web.user.sections.daftar');
    }

    public function validasi(Request $request)
    {
        $token = $this->generateToken();

        $validatedData = $request->validate([
            'nama_depan' => 'required',
            'nama_belakang' => 'required',
            'email' => 'required|email|unique:pengguna',
            'password' => 'required|min:8|max:255',
            'confirm_password' => 'required|same:password',
        ]);
        $validatedData['username'] = $validatedData['nama_depan'] . ' ' . $validatedData['nama_belakang'];
        $validatedData['is_reseller'] = false;
        $validatedData['token'] = $token;
        $validatedData['status'] = true;
        $validatedData['password'] = Hash::make($validatedData['password']);
        User::create($validatedData);

        return redirect()
            ->route('user.login')
            ->with('RegistrasiSukses', 'Registrasi anda sukses');
    }

    function generateToken()
    {
        $token = Str::random(20);
        if (DB::table('pengguna')->where('token', $token)->exists()) {
            $token = Str::random(20);
        }
        return $token;
    }
}
