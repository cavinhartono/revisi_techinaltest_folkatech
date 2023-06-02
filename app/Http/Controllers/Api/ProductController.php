<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        if ($products->count() == 0) return response()->json(['success' => false, 'error' => 'Produk tidak ada.'], 404);

        return response()->json([
            'success' => true,
            'products' => $products
        ], 200);
    }

    public function view($id)
    {
        $product = Product::find($id);
        if (!$product) return response()->json(['success' => false, 'error' => 'Produk tidak ditemukan.'], 404);

        return response()->json([
            'success' => true,
            'product' => $product
        ], 200);
    }
}
