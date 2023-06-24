<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $matchThese = [['status', '>=', '1'], ['supplier_id', '=', Auth::id()]];
        $orders = Order::where($matchThese)->get();
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
