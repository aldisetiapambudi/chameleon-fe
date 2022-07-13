<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailCartItem extends Model
{
    use HasFactory, Uuids;
    protected $table = "detail_cart_item";
    protected $primaryKey = 'id_detail_item_cart';
    protected $guarded = ['id_detail_item_cart'];
    // protected $fillable = ['id_produk', 'id_cart', 'quantity', 'size', 'color'];
}
