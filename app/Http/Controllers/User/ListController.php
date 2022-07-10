<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class ListController extends Controller
{
    public function index(Request $request)
    {
        $getRequest = $request->category;
        $category = Category::where('nama_kategori', $getRequest)->get();
        $idCategory = $category[0]['id_kategori'];
        $getProduct = Product::where('id_kategori', $idCategory)->get();

        return view('web.user.sections.list-product', [
            'products' => $getProduct,
        ]);

        // ddd($getProduct[1]['nama_produk']);
    }
}
