<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Сумка',
            'price' => 200,
        ]);
        Product::create([
            'name' => 'Клатч',
            'price' => 100,
        ]);
    }
}
