<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DetailCartItem;
use App\Models\CartItem;
use App\Models\Product;
use App\Models\ShippingVoucher;
Use App\Models\UserAddress;
use Faker\Provider\UserAgent;
use Illuminate\Support\Facades\Auth;


use function PHPUnit\Framework\isEmpty;

class CartController extends Controller
{
    public function index()
    {
        $getIdUser = Auth::user()->id_pengguna;
        $getCart = CartItem::where('id_pengguna', $getIdUser)->get();
        $addressUser = UserAddress::where('id_pengguna', $getIdUser)->where('main', 1)->get();

        // success query
        // return ddd($getCart[0]->DetailCartItem[0]->Product->harga_produk);
        // end success query
    $getDetail = DetailCartItem::where('id_cart', $getCart[0]->id_cart)->get();

        // -- dev

        $count = count($getDetail);
        // return ddd($count);
        $totalBerat = 0;
        $totalHarga = 0;
        for($a = 0; $a < $count; $a++){
            $harga = $getDetail[$a]->Product->harga_produk;
            $berat = $getDetail[$a]->Product->berat_produk;

            $totalHarga += $harga;
            $totalBerat += $berat;
        }
        $beratTotal = $totalBerat;
        $totalHarga = $totalHarga;

        // return ddd($totalBerat);
        // $getProduk = $getDetail->Product;
        // $getQuantity = $getDetail->quantity;

        // return json_decode($totalHarga );

        // return ddd($getDetail[0]->id_detail_item_cart);



        return view('web.user.sections.cart_detail', [
            'detail' => $getDetail,
            'address' => $addressUser,
            'totalBerat' => $beratTotal,
            'totalHarga' => $totalHarga,

        ]);
    }

    public function removeProduk(Request $request)
    {

        $idCart = $request->idCart_sendToController;
        $idDetailCart = $request->idDetailCart_sendToController;
        $elemenYangDihapus = $idCart;
        $removeDetail = DetailCartItem::where('id_detail_item_cart', $idDetailCart)->delete();

        $removeItem = CartItem::where('id_cart', $idCart)->delete();
        return response()->json([
            $removeDetail,
            $removeItem,
            $elemenYangDihapus,
            'success' => true
        ], 200);



    }

    public function validasiVocer(Request $request)
    {
        $kodeVocer = $request->kode;

        $getDataVocer = ShippingVoucher::where('code_voucher', $kodeVocer)->get();

       if($getDataVocer->isNotEmpty()){
           $getDiscount = $getDataVocer[0]->discount_voucher;
        //    return ddd('anda mendapatkan vocer sebanyak : '. $getDiscount);
            return response()->json([
                'respon' => 'valid',
                'totalDiskon' => $getDiscount,
                'success' => true
            ], 200);
       }
        else {
        // return ddd("anda tidak mendapatkan discount");
            return response()->json([
                'respon' => 'tidakValid',
                'success' => true
            ], 200);
        }


    }


}
