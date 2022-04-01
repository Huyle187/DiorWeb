<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = "customers";

    /**
     * Get all of the customer for the Customer
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function customer()
    {
        return $this->hasMany('Order', 'makhachhang', 'makhachhang');
    }
}
