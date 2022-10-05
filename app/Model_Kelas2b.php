<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Model_Kelas2b extends Model
{
    protected $table = "tb_kelas2b";
    protected $fillable = ['nama','kelas','msoffice','photoshop','laravel','image'];

    public $timestamps = false;
}
