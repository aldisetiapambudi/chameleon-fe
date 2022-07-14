<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CartItem;
use App\Models\DetailCartItem;
use Illuminate\Support\Facades\Auth;

class AddToBagController extends Controller
{
    public function index(Request $request)
    {

        if (Auth::check() == false) {
            return redirect()->route('user.login');
        }

        $idPengguna = Auth::user()->id_pengguna;
        $cartItem =  CartItem::create([
            'id_pengguna' => $idPengguna,
        ]);
        $getIdCart = $cartItem['id_cart'];
        // return ddd($getIdCart);


        $validasi = $request->validate([
            'id_produk' => 'required',
            'color' => 'required',
            'size' => 'required'
        ]);
        $validasi['id_cart'] = $getIdCart;
        $validasi['quantity'] = 1;
        DetailCartItem::create($validasi);

        return back()->with('successAddToCart', 'sukes');
    }
}
