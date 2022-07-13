<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddToBagController extends Controller
{
    public function index(Request $request)
    {
        return ddd($request);
    }
}
