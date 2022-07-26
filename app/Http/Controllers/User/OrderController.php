<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\CartItem;
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

        $dataOrder =  Transaction::where('id_pengguna', $idUser)->orderBy('waktu_transaksi', 'desc')->get();

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
        // return ddd($request);
        $idUser = Auth::user()->id_pengguna;

        $getKec = $request->sendKec;
        $getKab = $request->sendKab;
        $getProv = $request->sendProv;
        $getKodePos = $request->sendKodePos;
        $getIdAlamat = $request->sendIDAlamat;
        $getAlamat = $request->sendAlamat;
        $getTelp = $request->sendTelp;
        $getNama = $request->sendNama;
        $getTotalAll = $request->totalAll;
        $getVocer = $request->vocer_total;
        $getShippingTotal = $request->shipping_total;
        $getSubTotal = $request->sub_total;
        $kodeDiskon = $request->kode;
        $getShipping = $request->shipping;


        if($getTotalAll <= 0){
            return back();
        }

        // return ddd($request);
        $getAlamatLengkap = $getAlamat.','.$getKec.','.$getKab.','.$getProv.','.$getKodePos;
        // return ddd($getAlamatLengkap);
        $transaksi['id_pengguna'] = $idUser;
        $transaksi['id_alamat'] = $getIdAlamat;
        $transaksi['alamat_lengkap'] = $getAlamatLengkap;
        $transaksi['waktu_transaksi'] =  date("Y-m-d H:i:s");
        $transaksi['waktu_expired'] = date("Y-m-d H:i:s", time() + 86400);

        $transaksi['total_harga'] = $getTotalAll;
        $transaksi['total_ongkir'] = $getShippingTotal;
        $transaksi['status_transaksi'] = "pending";
        $transaksi['bukti_transfer'] = 0;
        $transaksi['no_resi'] = 0;
        $transaksi['kurir'] = $getShipping;
        $transaksi['catatan'] = 0;
        $transaksi['system_note'] = 'on_input';

        Transaction::create($transaksi);

        $getTransaksi = Transaction::where('id_pengguna', $idUser)->where('system_note','on_input')->get();
        $getIDTransaksi = $getTransaksi[0]->id_transaksi;
        $getKodeTransaksi = $getTransaksi[0]->kode_transaksi;

        // return ddd($getIDTransaksi, $getKodeTransaksi);


        $getCartData = CartItem::where('id_pengguna', $idUser)->get();



        foreach ($getCartData as $cart) {
            $idCart = $cart->id_cart;
            $getQty = $request->$idCart;
            // return ddd($getQty);
            $detail['id_transaksi'] = $getIDTransaksi;
            $detail['kode_transaksi'] = $getKodeTransaksi;
            $totalProduk = $request->$idCart;
            if($request->$getQty = $cart->id_cart){
                $detail['jumlah_produk']  = $totalProduk;
            }
            $detail['id_produk'] = $cart->DetailCartItem->id_produk;
                $detail['total'] = $cart->DetailCartItem->Product->harga_produk*$totalProduk;
                $detail['ukuran'] = $cart->DetailCartItem->size;
                $detail['warna'] = $cart->DetailCartItem->color;
                $detail['discount'] = 0;
                // return json_encode($detail);

            // return json_encode($cart);
            TransactionDetail::create($detail);
        }

    }



}
