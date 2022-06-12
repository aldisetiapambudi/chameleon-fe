<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubProduct extends Model
{
    use HasFactory;
    protected $table = "sub_produk";
    protected $primaryKey = 'id_sub_produk';
}
