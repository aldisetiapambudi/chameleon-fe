<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SizeRecommendation extends Model
{
    use HasFactory;
    protected $table = "tb_size_recom";
    protected $primaryKey = 'no';
}
