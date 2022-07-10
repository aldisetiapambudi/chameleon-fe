<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BestSeller extends Model
{
    use HasFactory;
    protected $table = "best_seller";
    protected $guarded = ['id'];

    public function Product()
    {
        return $this->belongsTo(Product::class, 'produk_id');
    }
}
