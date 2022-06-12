<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResellerProduct extends Model
{
    use HasFactory;
    protected $table = "produk_reseller";
    protected $primaryKey = 'id_produk_reseller';
}
