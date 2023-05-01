<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Supplier;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function main()
    {
        $products = Product::get();
        return view('main', compact('products'));
    }

    public function contacts()
    {
        return view('contacts');
    }

    public function supplier($code = null)
    {
        $supplierObj = Supplier::where('code', $code)->first();
        dd($supplierObj);
    }
}
