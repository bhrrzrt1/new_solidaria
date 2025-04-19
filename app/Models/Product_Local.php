<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product_Local extends Model
{
    use HasFactory;

<<<<<<< HEAD
=======
    protected $table = 'product_locals';
>>>>>>> db63aabc9d3c5be3c382df573f1bbc44314cb4d5
    protected $fillable = [
        'product_id',
        'local_id',
        'StockFraction',
        'StockBox',
        'stock_min',
        'stock_max',
    ];

    public function product(): BelongsTo{
        return $this->belongsTo(Product::class,'product_id','id');
    }
    public function local(): BelongsTo{
        return $this->belongsTo(Local::class,'local_id','id');
    }
}
