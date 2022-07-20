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


    public function addAddress(Request $request)
    {


       $get_provinsi = $request->select_prov;
       $provinsi = explode(',', $get_provinsi);

       $get_kabupaten = $request->select_kab;
       $kabupaten = explode(',', $get_kabupaten);

        $get_kecamatan = $request->select_kec;
        $kecamatan = explode(',', $get_kecamatan);


        $data['id_pengguna'] = Auth::user()->id_pengguna;
        $data['nama_lengkap'] = $request->nama_lengkap;
        $data['no_telp'] = $request->no_tlp;
        $data['alamat_1'] = $request->alamat_1;
        $data['provinsi_id'] = $provinsi[0];
        $data['provinsi'] = $provinsi[1];
        $data['kabupaten_id'] = $kabupaten[0];
        $data['kabupaten'] = $kabupaten[1];
        $data['kecamatan_id'] = $kecamatan[0];
        $data['kecamatan'] = $kecamatan[1];
        $data['kode_pos'] = $request->kode_pos;
        $data['main'] = 0;
        // return ddd($data);
        // Additional karena ada tabel yang tidak memiliki default value namun tidak diisi
        $data['alamat_2'] = 0;

        UserAddress::create($data);
        return redirect()->route('user.address');
    }



}
