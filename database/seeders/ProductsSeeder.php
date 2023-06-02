<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'rating' => 4.90,
            'price' => 15000,
            'name' => "Kopi Hitam",
            'brand' => "Kapal Api",
            'qty' => 90,
        ]);

        Product::create([
            'rating' => 4.45,
            'price' => 9000,
            'name' => "Kopi Susu",
            'brand' => "ABC",
            'qty' => 50,
        ]);

        Product::create([
            'rating' => 4.60,
            'price' => 12000,
            'name' => "Capucino",
            'brand' => "ABC",
            'qty' => 67,
        ]);
    }
}
