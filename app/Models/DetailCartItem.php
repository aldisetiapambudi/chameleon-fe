<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailCartItem extends Model
{
    use HasFactory,Uuids;
    protected $table = "detail_item_cart";
    protected $primaryKey = 'id_detail_item_cart';
}
