<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BestSeller;
use App\Models\Product;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    public function index(View $view)
    {
        return view('web.user.sections.home', [
            'bestSeller' =>  BestSeller::where('active', 1)->orderBy('order', 'asc')->get(),


        ]);
    }
}
