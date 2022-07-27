<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    use HasFactory;
    protected $table = "detail_transaksi";
    protected $primaryKey = null;
    protected $fillable = [
        "id_transaksi", "kode_transaksi", "id_produk", "jumlah_produk", "total", "discount", "ukuran", "warna"
    ];

    public function Transaction()
    {
        return $this->belongsTo(Transaction::class, 'id_transaksi','id_transaksi');
    }

    public function Product()
    {
        return $this->belongsTo(Product::class, 'id_produk', 'id_produk');
    }




}
