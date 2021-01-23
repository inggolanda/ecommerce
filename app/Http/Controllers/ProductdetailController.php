<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductdetailController extends Controller
{
    public function index()
    {
        return view('product.detail');
    }

    public function cart()
    {
        return view('product.cart.cart');
    }
}
