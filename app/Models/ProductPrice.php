<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class ProductPrice extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'box_price',
        'fraction_price',
    ];

    public function product(): BelongsTo{
        return $this->belongsTo(Product::class,'product_id','id');
    }
}
