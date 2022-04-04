<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\Collection;

class ProductType extends Model
{
    protected $table = "typeproducts";
    
    /**
     * Get all of the product for the ProductType
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function product()
    {
        return $this->hasMany(Product::class,'masanpham');
    }

    public function collection()
    {
        return $this->hasMany(Collection::class,'id');
    }
}
