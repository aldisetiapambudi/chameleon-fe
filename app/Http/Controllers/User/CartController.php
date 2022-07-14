<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DetailCartItem;
use App\Models\CartItem;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $getIdUser = Auth::user()->id_pengguna;
        $getCart = CartItem::where('id_pengguna', $getIdUser)->get();
        // $countCart = count($getCart);
        // $countCart = $countCart - 1;
        // // return ddd($countCart);
        // for ($getDataCart = 0; $getDataCart <= $countCart; $getDataCart++) {
        //     $getIdCart = $getCart[$getDataCart]['id_cart'];
        //     // $a = var_dump($getIdCart . '<br>');

        //     for ($getDetail = 0; $getDetail <= $countCart; $getDetail++) {
        //         $getDetailItemCart = DetailCartItem::where('id_cart', $getIdCart)->get();
        //     }
        // }
        // return ddd(count($getDetailItemCart));

        // $getIdDetailItemCart = $getDetailItemCart[0]['id_detail_item_cart'];
        // return ddd($getIdDetailItemCart);

        // $getDetailCart = CartItem::where('id_cart');
        return view('web.user.sections.cart_detail', [
            'cart' => $getCart,
        ]);
    }
}
