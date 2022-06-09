<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function store(Request $request)
    {
        $attributes = $request->all();

        return Product::create([
            "name" => $attributes['name'],
            "price" => $attributes['price'],
        ]);
    }
}
