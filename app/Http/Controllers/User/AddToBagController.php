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
        $getDataId = CartItem::where('id_pengguna', $idPengguna)->get();
        // return ddd(count($getDataId));
        if(count($getDataId) == 0){
            CartItem::create([
                'id_pengguna' => $idPengguna,
            ]);
            $idPengguna = Auth::user()->id_pengguna;
            $getDataId = CartItem::where('id_pengguna', $idPengguna)->get();
            $getIdCart = $getDataId[0]->id_cart;
        }
            else{
            $getIdCart = $getDataId[0]->id_cart;
        }

        $data['id_cart'] = $getIdCart;
        $data['id_produk'] = $request->id_produk;
        $data['color'] = $request->color;
        $data['size'] = $request->size;

        $data['quantity'] = 1;
        DetailCartItem::create($data);

        return back()->with('successAddToCart', 'sukes');
    }


}
