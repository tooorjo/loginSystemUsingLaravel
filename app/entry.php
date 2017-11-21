<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class entry extends Model
{
    protected $table= 'users';
    protected $keyType='string';
    protected $primarykey='username';
    public $incrementing=false;

    protected $fillable=['username','password','occupation'];
}
