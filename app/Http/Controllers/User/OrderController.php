<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index()
    {
        $idUser = Auth::user()->id_pengguna;

        $dataOrder =  Transaction::where('id_pengguna', $idUser)->get();

        foreach( $dataOrder as $date ){
            $date = $date->waktu_transaksi;
            $convertDate = strtotime($date);
            $dateConverted = date('l F Y ', $convertDate);
            $time = date('h:i:s A');
        }
        // return ddd($dateConverted);
        return view('web.user.sections.orders', [
            'date' => $dateConverted,
            'time' => $time,
            'orders' => $dataOrder,
        ]);
    }

    public function show(Request $request)
    {

        $getKode = $request['kode_transaksi'];
        // return ddd($getKode);


        $DetailTransaksi = TransactionDetail::where('kode_transaksi', $getKode)->get();
        // $subTotal = $DetailTransaksi->jumlah_produk*$DetailTransaksi->total;

        // return ddd($DetailTransaksi[0]->kode_transaksi);
        return view('web.user.sections.order_details', [
            'detailTransaksi' => $DetailTransaksi,
            // 'subTotal' => $subTotal,
        ]);
    }

}
