<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = "orders";

    /**
     * Get all of the order_detail for the Order
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function order_detail()
    {
        return $this->hasMany('OrderDetail', 'sohoadon', 'sohoadon');
    }

    /**
     * Get the customer that owns the Order
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function customer()
    {
        return $this->belongsTo('Customer', 'makhachhang', 'makhachhang');
    }
}
