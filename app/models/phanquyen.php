<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class phanquyen extends Model
{
    protected $table='phanquyens';
    protected $fillable=['id','tenphanquyen','hienthi'];
    public $timestamps=true;
}
