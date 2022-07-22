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
    protected $guarded = ['id_alamat'];

    public function User()
    {
        return $this->belongsTo(User::class, 'id_pengguna');
    }

    public function Transaction()
    {
        return $this->hasOne(Transaction::class, 'id_alamat');
    }

}
