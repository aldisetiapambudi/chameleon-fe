<?php

namespace App\Models;

use App\Traits\Uuids;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory, Uuids;
    protected $table = "produk";
    protected $primaryKey = 'id_produk';
    protected $fillable = [
        "kode_produk",
        "nama_produk",
        "deskripsi_produk",
        "stok_produk",
        "harga_produk",
        "id_kategori",
        "warna_produk",
        "size_produk",
        "thumbnail_produk",
        "berat_produk",
        "diskon_produk",
        "label_produk",
        "video_link",
    ];

    /**
     * Boot function from Laravel.
     */
    protected static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            if (empty($model->{$model->getKeyName()})) {
                $model->{$model->getKeyName()} = Str::uuid()->toString();
                $digits = 2;
                $random = rand(pow(10, $digits - 1), pow(10, $digits) - 1);
                $model->kode_produk = IdGenerator::generate(['table' => $model->getTable(), 'length' => '21', 'prefix' => "CC-" . $random . date("YmdHi") . "-", 'field' => "kode_produk"]);
            }
        });
    }

    // public function bestSeller()
    // {
    //     return $this->hasOne(BestSeller::class, 'produk_id');
    // }
}
