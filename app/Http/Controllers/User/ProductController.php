<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{
    public function index(Request $request)
    {
        $getSlug = $request['slug'];
        $getDetailProduct = Product::where('nama_produk', $getSlug)->get();
        $getProduk = $getDetailProduct[0];

        $getLabel = $getProduk['label_produk'];
        $labelExplode = explode(',', $getLabel);
        $labelLeght = count($labelExplode);

        $getSize = $getProduk['size_produk'];
        $sizeExplode = explode(',', $getSize);
        $sizeLeght = count($sizeExplode);


        return view('web.user.sections.detail-product', [
            'produk' => $getProduk,
            'labelLeght' => $labelLeght,
            'labelExplode' => $labelExplode,
            'sizeExplode' => $sizeExplode,
            'sizeLeght' => $sizeLeght
        ]);
    }
}
