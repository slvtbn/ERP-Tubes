<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'tb_product';
    protected $primaryKey = 'id_product';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = ['id_product','nama_product'];
    public $timestamps = false;
}
