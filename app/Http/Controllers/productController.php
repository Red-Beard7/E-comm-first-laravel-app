<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class productController extends Controller
{
    //
    function index() {
        $productData = Product::all();
        return View('product', ['products' => $productData]);
    }
}