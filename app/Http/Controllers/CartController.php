<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public static function index()
    {
        return Cart::get();
    }

    public static function store(Request $request)
    {
        $cart = Cart::add($request->id, $request->quantity ?? 1);

        return $cart;
    }

}
