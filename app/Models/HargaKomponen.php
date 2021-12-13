<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HargaKomponen extends Model
{
    use HasFactory;
    protected $table = 'tb_harga_komponen';
    protected $primaryKey = 'id_harga_komponen';
    protected $fillable = ['id_product','id_komponen', 'jumlah', 'harga'];
    public $timestamps = false;
}
