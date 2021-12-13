<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Production extends Model
{
    use HasFactory;
    protected $table = 'tb_production';
    protected $primaryKey = 'id_production';
    protected $fillable = ['id_order', 'nama_pemesan', 'product', 'jlh_product', 'tgl_order', 'tgl_selesai', 'id_harga_komponen'];
    public $timestamps = false;
}
