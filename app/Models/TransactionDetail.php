<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    use HasFactory;
    protected $table = "detail_transaksi";
    protected $primaryKey = null;


    public function Transaction()
    {
        return $this->belongsTo(Transaction::class, 'id_transaksi');
    }

    public function Product()
    {
        return $this->belongsTo(Product::class, 'id_produk');
    }




}
