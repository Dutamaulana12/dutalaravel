<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Model_Kelas2c extends Model
{
    protected $table = "tb_kelas2c";
    protected $fillable = ['nama','kelas','msoffice','photoshop','laravel','image'];

    public $timestamps = false;
}
