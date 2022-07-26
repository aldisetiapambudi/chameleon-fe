<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Pharaonic\LaravelHijri\LaravelHijri;

class OrderController extends Controller
{
    public function index()
    {
        $idUser = Auth::user()->id_pengguna;

        $dataOrder =  Transaction::where('id_pengguna', $idUser)->get();

        foreach( $dataOrder as $date ){
            $date = $date->waktu_transaksi;
            $TransaksiHijriah = Carbon::parse($date)->toHijri()->isoFormat('dddd, D MMMM Y');
            $TransaksiMasehi =  Carbon::parse($date)->isoFormat('dddd, D MMMM Y, H:m:s');

        }
        // return ddd($dateConverted);
        return view('web.user.sections.orders', [
            'orders' => $dataOrder,
            'orderDate' => $TransaksiMasehi,
            'orderDateHijriah' => $TransaksiHijriah
        ]);
    }

    public function show(Request $request)
    {

        $getKode = $request['kode_transaksi'];
        // return ddd($getKode);


        $DetailTransaksi = TransactionDetail::where('kode_transaksi', $getKode)->get();

        $idPengguna = $DetailTransaksi[0]->Transaction->id_pengguna;
        if(Auth::user()->id_pengguna !== $idPengguna){
            return back();
        }


        $getTransaction = Transaction::where('kode_transaksi', $getKode)->get();
        $waktu_kadaluarsa = $getTransaction[0]->waktu_exipired;
        $waktu_order = $getTransaction[0]->waktu_transaksi;

        $ExpHijriah = Carbon::parse($waktu_kadaluarsa)->toHijri()->isoFormat('dddd, D MMMM Y');
        $ExpMasehi = Carbon::parse($waktu_kadaluarsa)->isoFormat('dddd, D MMMM Y, H:m:s');
        $TransaksiHijriah = Carbon::parse($waktu_order)->toHijri()->isoFormat('dddd, D MMMM Y');
        $TransaksiMasehi =  Carbon::parse($waktu_order)->isoFormat('dddd, D MMMM Y, H:m:s');
        // // return ddd($waktu_expired);
        // // return ddd($DetailTransaksi[0]->kode_transaksi);


    //    return ddd();
        return view('web.user.sections.order_details', [
            'detailTransaksi' => $DetailTransaksi,
            'expMasehi' => $ExpMasehi,
            'expHijriah' => $ExpHijriah,
            'orderDateHijriah' => $TransaksiHijriah,
            'orderDateMasehi' => $TransaksiMasehi,

        ]);
    }

    public function konfirmasiPembayaran(Request $request)
    {
        return ddd($request->kode_order);
    }

    public function transaksi(Request $request)
    {

    }



}
