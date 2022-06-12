<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShirtProductSize extends Model
{
    use HasFactory;
    protected $table = "size_produk_baju";
    protected $primaryKey = 'no';
}
