<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot('count')->withTimestamps();
    }

    public function calcFullPrice()
    {
        $sum = 0;
        foreach ($this->products()->withTrashed()->get() as $product) {
            $sum += $product->calcPrice();
        }
        return $sum;
    }

    public function saveOrder($org, $name, $phone, $address)
    {
        if ($this->status == 0) {
            $this->organization_name = $org;
            $this->contact_name = $name;
            $this->phone_number = $phone;
            $this->address = $address;
            $this->status = 1;
            $this->save();
            session()->forget('orderId');
            return true;
        } else {
            return false;
        }
    }

    public function updateOrderStatus($status)
    {
        $this->status = $status;
        $this->save();
    }
}
