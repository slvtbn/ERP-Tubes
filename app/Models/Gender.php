<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    use HasFactory;
    protected $table = 'tb_gender';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = false;
}
