<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BestSeller;
use App\Models\Product;


class HomeController extends Controller
{
    public function index()
    {
        return view('web.user.sections.home', [
            'bestSeller' =>  BestSeller::where('active', 1)->orderBy('order', 'asc')->get(),

        ]);
    }
}
