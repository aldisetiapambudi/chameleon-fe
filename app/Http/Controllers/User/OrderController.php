<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\CartItem;
use App\Models\DetailCartItem;
use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Pharaonic\LaravelHijri\LaravelHijri;

class OrderController extends Controller
{
    public function index()
    {
        $idUser = Auth::user()->id_pengguna;

        $dataOrder =  Transaction::where('id_pengguna', $idUser)->orderBy('waktu_transaksi', 'desc')->get();

        $cekOrder = count($dataOrder);
        if($cekOrder == 0){
            return back();
        }

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
        $kodVocer = $request->kode;
        $diskon = $request->dicount;
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

        $getTransaksi =  Transaction::create($transaksi);

        $getIDTransaksi = $getTransaksi->id_transaksi;
        $getKodeTransaksi = $getTransaksi->kode_transaksi;

        // return ddd($getIDTransaksi, $getKodeTransaksi);


        $getCart = CartItem::where('id_pengguna', $idUser)->get();
        // return ddd($getCart);
        $getCartData = DetailCartItem::where('id_cart', $getCart[0]->id_cart)->get();
        // return ddd($getCartData[0]->id_detail_item_cart);




        $hitung = count($getCartData);



        for($a = 0; $a < $hitung; $a++){
            $getIdDetailCart =$getCartData[$a]->id_detail_item_cart;
            $detail['kode_transaksi'] = $getKodeTransaksi;
                DB::table('detail_transaksi')->insert([
                'id_transaksi' => $getIDTransaksi,
                'kode_transaksi' => $getKodeTransaksi,
                'id_produk' => $getCartData[$a]->id_produk,
                'jumlah_produk' =>  $request->$getIdDetailCart,
                'total' =>$getCartData[$a]->Product->harga_produk*$request->$getIdDetailCart,
                'discount' =>$getCartData[$a]->Product->diskon_produk,
                'ukuran' =>$getCartData[$a]->size,
                'warna' =>$getCartData[$a]->color
            ]);
        }

        // return ddd($request);

        // for($a = 0; $a < $hitung; $a++){
        //     $data = array(
        //         // $detail['id_'] = $getCartData[$a]->id_cart,
        //         $getDetailCart = $getCartData[$a]->id_detail_item_cart,
        //         $getQty = $request->$getDetailCart,
        //         $detail['id_transaksi'] = $getIDTransaksi,
        //         $detail['kode_transaksi'] = $getKodeTransaksi,
        //         // $totalProduk = $getQty,
        //         $detail['jumlah_produk']  = $getQty,
        //         $detail['id_produk'] = $getCartData[$a]->id_produk,
        //         $detail['total'] = $getCartData[$a]->Product->harga_produk*$getQty,
        //         $detail['ukuran'] = $getCartData[$a]->size,
        //         $detail['warna'] = $getCartData[$a]->color,
        //         $detail['discount'] = $getCartData[$a]->Product->diskon_produk,
        //     );
        //     return ddd($data);
        //     // TransactionDetail::create($data);
        // }


        // return ddd($getCartData[0]);


        // foreach($getCartData as $data){
        //     $getIdDetailCart = $data->id_detail_item_cart;
        //     $detail['id_transaksi'] = $getIDTransaksi;
        //     $detail['kode_transaksi'] = $getKodeTransaksi;
        //     $detail['id_produk'] = $data->id_produk;
        //     // if($data->id_detail_item_cart == $request->$getIdDetailCart){
        //         $detail['jumlah_produk'] = $request->$getIdDetailCart;
        //         $detail['total'] = $data->Product->harga_produk*$request->$getIdDetailCart;
        //     // }
        //     $detail['discount'] = $data->Product->diskon_produk;
        //     $detail['ukuran'] = $data->size;
        //     $detail['warna'] = $data->color;
        //     TransactionDetail::create($detail);
        // }


    }



}
