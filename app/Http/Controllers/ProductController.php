<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function show ($id = null) {
        $products = Product::all();

        return view('admin.products.index')->with([
            'products' => $products
        ]);
    }

    function new () {
        return view('admin.products.new');
    }
}
