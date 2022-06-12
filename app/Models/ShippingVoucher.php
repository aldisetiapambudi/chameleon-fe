<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShippingVoucher extends Model
{
    use HasFactory;
    protected $table = "voucher_ongkir";
    protected $primaryKey = 'id_voucher';
}
