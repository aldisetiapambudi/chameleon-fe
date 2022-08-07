<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\CartItem;
use App\Models\DetailCartItem;
use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use App\Services\Midtrans\CreateTokenSnapService;
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

        foreach($dataOrder as $order){
            $snapToken = $order->snap_token;
            if(empty($snapToken)){
                $itemDetails = [];
                $indexId = 1;
                foreach($order->TransactionDetail as $index => $item){
                    $itemDetails[] = [
                        "id" => $indexId,
                        "price" => $item->total,
                        "quantity" => $item->jumlah_produk,
                        "name" => $item->Product->nama_produk
                    ];
                    $indexId++;
                }
                $itemDetails[] = [
                    "id" => $indexId++,
                    "price" => $order->total_ongkir,
                    "quantity" => 1,
                    "name" => 'Ongkos Kirim',
                ];
                $customerDetail = [
                "first_name" => $order->UserAddress->nama_lengkap,
                    "email" => $order->user->email,
                    "phone" => $order->UserAddress->no_telp,
                ];
                $midtrans = new CreateTokenSnapService($order);
                $snapToken = $midtrans->getSnapToken($itemDetails, $customerDetail);
                $order->snap_token = $snapToken;
                $order->save();
            }
        }

        return view('web.user.sections.orders', [
            'orders' => $dataOrder,
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
        $validasi = $request->validate([
            'shipping' => 'required'
        ]);



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
        $transaksi['payment_status'] = 1;

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
            $getIdDetailCart = $getCartData[$a]->id_detail_item_cart;
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

        // delete data cart dan detail cart
            $getCartData = DetailCartItem::where('id_cart', $getCart[0]->id_cart)->delete();
            $getCart = CartItem::where('id_cart', $getCart[0]->id_cart)->delete();





        return redirect()->route("user.orders");









    }



}
