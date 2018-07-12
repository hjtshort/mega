<?php

namespace App\models;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Database\Eloquent\Model;

class admin extends Authenticatable
{
    use Notifiable;
    protected $table='admins';
    protected $fillable=['id','email','password','name','avatar','sdt','provider','provider_id','phanquyen','template'];
    public $timestamps=true;
}
