<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
Use App\Models\UserAddress;

class UserController extends Controller
{
    public function address()
    {
        $getIdUser = Auth::user()->id_pengguna;
        // ddd($getIdUser->UserAddress->nama_lengkap);

        $addressUser = UserAddress::where('id_pengguna', $getIdUser)->where('main', 1)->get();

        return view('web.user.sections.address',[
            'address' => $addressUser,
        ]);
    }
    public function changeAddress(Request $request)
    {
        $getNewAddress = $request->changeAddressUser;
        $defaultValue['main'] = 0;
        $getAddressDB = UserAddress::where('id_pengguna', Auth::user()->id_pengguna)->update($defaultValue);
        $updateValue['main'] = 1;
        $updateNew = UserAddress::where('id_alamat', $getNewAddress)->update($updateValue);
        return back();
    }

    public function hapusAlamat(Request $request)
    {
        UserAddress::where('id_alamat', $request->id_alamat)->delete();
         return back();
    }

}
