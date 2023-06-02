<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        if (!$products) return response()->json(['error' => 'Produk tidak ditemukan.'], 404);

        return response()->json($products, 200);
    }

    public function view($id)
    {
        $product = Product::find($id);
        if (!$product) return response()->json(['error' => 'Produk tidak ditemukan.'], 404);

        return response()->json($product, 200);
    }
}
