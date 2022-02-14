<?php

namespace App\Http\Controllers;

use App\Domain\Products\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('welcome', [
            'products' => $products
        ]);
    }
}
