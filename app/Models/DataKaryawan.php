<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataKaryawan extends Model
{
    use HasFactory;
    protected $table = 'tb_data_karyawan';
    protected $primaryKey = 'id_karyawan';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = ['id_karyawan', 'nama_karyawan', 'id_gender', 'tempat_lahir', 'tgl_lahir', 'telepon', 'email', 'alamat'];
    public $timestamps = false;
}
