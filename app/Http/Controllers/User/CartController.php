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



        // -- dev
        $count = count($getCart);

        // $getProduk =
        $totalBerat = 0;
        $totalHarga = 0;
        for($a = 0; $a < $count; $a++){
            $getDetail = $getCart[$a]->DetailCartItem;
            $harga = $getDetail->Product->harga_produk;
            $berat = $getDetail->Product->berat_produk;

            $totalHarga += $harga;
            $totalBerat += $berat;
        }
        $beratTotal = $totalBerat;
        $totalHarga = $totalHarga;

        // return ddd($totalHarga);
        // $getProduk = $getDetail->Product;
        // $getQuantity = $getDetail->quantity;

        // return json_decode($totalHarga );

        // return ddd($getQuantity);



        return view('web.user.sections.cart_detail', [
            'cart' => $getCart,
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
