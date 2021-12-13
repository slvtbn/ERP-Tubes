<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komponen extends Model
{
    use HasFactory;
    protected $table = 'tb_komponen';
    protected $primaryKey = 'id_komponen';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = ['id_komponen','nama_komponen', 'id_satuan', 'harga'];
    public $timestamps = false;
}
