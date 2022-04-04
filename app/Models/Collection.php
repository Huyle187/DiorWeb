<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProductType;

class Collection extends Model
{
    protected $table = "collections";

    /**
     * Get the typeproduct that owns the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product_typee()
    {
        return $this->belongsTo(ProductType::class,'maloaihang');
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
