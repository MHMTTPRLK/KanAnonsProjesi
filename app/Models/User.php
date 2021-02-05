<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    protected  $table='users';
    protected  $guard='users';
    use HasFactory, Notifiable;
    use SoftDeletes;

    protected $fillable = [

        'name',
        'surname',
        'phone',
        'kanGrubu',
        'sehir',
        'ilce',
        'email',
        'password',
        'utype',
        'profile_photo_path',

    ];

    protected $hidden = [


        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function get_City()
    {
        return $this->hasOne('App\Models\City','id','sehir');
    }

    public function get_District()
    {
        return $this->hasOne('App\Models\District','id','ilce');
    }
}
