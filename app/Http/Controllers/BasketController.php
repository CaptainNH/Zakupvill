<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class BasketController extends Controller
{
    public function basket()
    {
        $orderId = session('orderId');
        if (!is_null($orderId)) {
            $order = Order::findOrFail($orderId);
        } else {
            return redirect(route('suppliers'));
        }
        return view('basket', compact('order'));
    }

    public function basketConfirm(Request $request)
    {
        $orderId = session('orderId');
        if (is_null($orderId)) {
            return redirect(route('main'));
        }
        $order = Order::find($orderId);
        $success = $order->saveOrder($request->title, $request->name, $request->phone, $request->address);

        if ($success) {
            session()->flash('success', 'Ваш заказ принят!');
        } else {
            session()->flash('failure', 'Ошибка');
        }
        return redirect(route('main'));
    }

    public function basketAdd($productId)
    {
        $orderId = session('orderId');
        if (is_null($orderId)) {
            $order = Order::create();
            $product = Product::findOrFail($productId);
            $product->count--;
            $product->save();
            $order->supplier_id = $product->supplier_id;
            $order->save();
            session(['orderId' => $order->id]);
        } else {
            $order = Order::find($orderId);
        }

        if ($order->products->contains($productId)) {
            if ($order->products()->where('product_id', $productId)->first()->count > 0) {
                $pivotRow = $order->products()->where('product_id', $productId)->first()->pivot;
                $pivotRow->count++;
                $pivotRow->update();
                $product = $order->products()->where('product_id', $productId)->first();
                $product->count--;
                $product->save();
            }
        } else {
            $order->products()->attach($productId);
        }

        return redirect()->route('basket');
    }

    public function basketRemove($productId)
    {
        $orderId = session('orderId');
        if (!is_null($orderId)) {
            $order = Order::find($orderId);
            if ($order->products->contains($productId)) {
                $pivotRow = $order->products()->where('product_id', $productId)->first()->pivot;
                $product = $order->products()->where('product_id', $productId)->first();
                $product->count++;
                $product->save();
                if ($pivotRow->count < 2) {
                    $order->products()->detach($productId);
                } else {
                    $pivotRow->count--;
                    $pivotRow->update();
                }
            }
            if ($order->products()->get()->count() < 1) {
                Order::where('id', $orderId)->delete();
                session()->forget('orderId');
                return redirect(route('suppliers'));
            }
            return redirect()->route('basket');
        }
    }
}
