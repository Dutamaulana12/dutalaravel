<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Model_Kelas2a extends Model
{
    protected $table = "tb_kelas2a";
    protected $fillable = ['nama','kelas','msoffice','photoshop','laravel','image'];

    public $timestamps = false;
}
