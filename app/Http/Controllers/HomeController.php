<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function orders()
    {
        $orders = Order::where('status', '>=', 1)->get();
        return view('auth.orders', compact('orders'));
    }

    public function showOrder($orderId)
    {
        $order = Order::find($orderId);
        $products = $order->products()->withTrashed()->get();
        return view('auth.order', compact('order', 'products'));
    }

    public function changeOrderStatus(Order $order, Request $request)
    {
        $order->updateOrderStatus($request->options);
        return redirect(route('order', $order->id));
    }
}
