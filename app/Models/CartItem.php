<?php

namespace App\Models;

use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    use HasFactory;
    protected $table = "cart_item";
    protected $primaryKey = 'id_cart';
    public $incrementing = false;
    protected $fillable = [
        'id_pengguna'
    ];

    /**
     * Boot function from Laravel.
     */
    protected static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            if (empty($model->{$model->getKeyName()})) {
                $model->{$model->getKeyName()} = IdGenerator::generate(['table' => $model->getTable(),'length' => '24','prefix' => "Invoice-".date("YmdHi")."-",'field' => $model->getKeyName()]);
            }
        });
    }
   /**
     * Get the auto-incrementing key type.
     *
     * @return string
     */
    public function getKeyType()
    {
        return 'string';
    }
}
