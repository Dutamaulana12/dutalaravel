<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Model_Users extends Model
{
    protected $table = "users";
    protected $fillable = ['name','email','created_at'];

    public $timestamps = false;
}
