<?php

namespace App\Models;
use DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class AcilKan extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table='acilkan';
    protected  $fillable=[
      'user_id',
      'anons_name',
      'anons_surname',
      'anons_phone',
      'anons_kan',
      'anons_detay',
      'sehir',
      'ilce'

    ];

    public function  get_User()
    {
        return $this->hasOne('App\Models\User','id','user_id');
    }
    public function get_City()
    {
        return $this->hasOne('App\Models\City','id','sehir');
    }

    public function get_District()
    {
        return $this->hasOne('App\Models\District','id','ilce');
    }


}
