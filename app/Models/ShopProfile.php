<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShopProfile extends Model
{
    use HasFactory,Uuids;
    protected $table = "profile_toko";
    protected $primaryKey = 'id_toko';
}
