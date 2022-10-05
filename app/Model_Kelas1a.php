<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Model_Kelas1a extends Model
{
    protected $table = "tb_kelas1a";
    protected $fillable = ['nama','kelas','msoffice','photoshop','laravel','image'];

    public $timestamps = false;
}
