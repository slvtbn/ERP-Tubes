<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'tb_order';
    protected $primaryKey = 'id_order';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = ['id_order','nama_pemesan', 'alamat', 'telepon', 'id_product', 'jumlah_produk', 'tgl_order', 'tgl_selesai'];
    public $timestamps = false;
}
