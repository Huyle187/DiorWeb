<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProductType;
use App\Models\Collection;

class Product extends Model
{
    protected $table = "products";
    protected $primaryKey = 'masanpham';

    /**
     * Get the typeproduct that owns the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product_type()
    {
        return $this->belongsTo(ProductType::class,'maloaihang');
    }

    public function collection()
    {
        return $this->belongsTo(Collection::class,'id');
    }

    /**
     * Get all of the orderdetail for the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orderdetail()
    {
        return $this->hasMany('OrderDetail', 'masanpham', 'sohoadon');
    }

    public function scopeSearch($query)
    {
        if($searchCollection = request()->searchCollection)
        {
            $query = $query->where('tensanpham','like','%'.$searchCollection.'%')
                            ->orwhere('subtitle','like','%'.$searchCollection.'%');
        }

        return $query;
    }
}
