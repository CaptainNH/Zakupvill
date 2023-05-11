<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Supplier;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function main()
    {
        return view('main');
    }

    public function products()
    {
        $products = Product::get();
        return view('products', compact('products'));
    }

    public function supplier($code = null)
    {
        $supplierObj = Supplier::where('code', $code)->first();
        dd($supplierObj);
    }

    public function showProduct($productId)
    {
        $product = Product::find($productId);
        return view('product', compact($product));
    }
}
