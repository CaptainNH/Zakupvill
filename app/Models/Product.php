<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $fillable = ['supplier_id', 'name', 'description', 'warehouse', 'image', 'price', 'count'];
    protected $guarded = [];

    public function getSupplier()
    {
        return Supplier::find($this->supplier_id);
    }

    public function calcPrice()
    {
        if (!is_null($this->pivot)) {
            return $this->pivot->count * $this->price;
        }
        return $this->price;
    }

    public function isAvailable()
    {
        $orderId = session('orderId');
        if (!is_null($orderId)) {
            // $order = Order::find($orderId);
            $order = Order::where([['status', '=', 0], ['id', '=', $orderId]])->first();
            if ($order != null) {
                return ($this->count > 0 && $order->supplier_id == $this->supplier_id);
            }
        }
        return $this->count > 0;
    }
}
