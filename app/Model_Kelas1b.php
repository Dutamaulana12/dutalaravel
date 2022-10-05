<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Model_Kelas1b extends Model
{
    protected $table = "tb_kelas1b";
    protected $fillable = ['nama','kelas','msoffice','photoshop','laravel','image'];

    public $timestamps = false;
}
