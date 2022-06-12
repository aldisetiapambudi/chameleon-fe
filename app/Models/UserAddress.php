<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    use HasFactory, Uuids;
    protected $table = "alamat_pengguna";
    protected $primaryKey = 'id_alamat';
}
