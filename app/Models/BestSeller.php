<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BestSeller extends Model
{
    use HasFactory;
    protected $table = "best_seller";
    protected $primaryKey = 'id';
    protected $guarded = ['id'];

    public function product()
    {
        return $this->hasOne(Product::class, 'id_produk');
    }
}
