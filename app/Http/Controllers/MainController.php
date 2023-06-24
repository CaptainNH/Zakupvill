<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\Supplier;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function main()
    {
        return view('main');
    }

    public function products($supplierId)
    {
        $products = Product::where('supplier_id', $supplierId)->get();
        $order = Order::where('supplier_id', 0)->first();
        return view('products', compact('products', 'order'));
    }

    public function suppliers()
    {
        $suppliers = Supplier::get();
        return view('providers', compact('suppliers'));
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

    public function about()
    {
        return view('about');
    }
}
