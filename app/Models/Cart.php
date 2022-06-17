<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'session_id',
        'product_id',
        'price',
        'quantity'
    ];

    public static function get()
    {
        return self::where(['session_id' =>
            config('session.id')])->get();
    }

    public static function add($id, $quantity)
    {
        $product = Product::findOrFail($id);

        if ($cart = self::where([
            'session_id' => config('session.id'),
            'product_id' => $id])
            ->first()) {
            $cart->quantity += $quantity;
            $cart->price = $product->price * $cart->quantity;
            $cart->save();
        } else {
            $cart = self::create([
                'session_id' => config('session.id'),
                'product_id' => $product->id,
                'quantity' => $quantity,
                'price' => $product->price,
            ]);
        }

        return $cart;
    }
}
