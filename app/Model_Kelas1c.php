<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Model_Kelas1c extends Model
{
    protected $table = "tb_kelas1c";
    protected $fillable = ['nama','kelas','msoffice','photoshop','laravel','image'];

    public $timestamps = false;
}
