<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function address()
    {
        // $getIdUser = Auth::user()->id_pengguna;
        // ddd($getIdUser->UserAddress->nama_lengkap);

        return view('web.user.sections.address');
    }
}
