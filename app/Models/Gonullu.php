<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gonullu extends Model
{
   use HasFactory;
    use SoftDeletes;
    protected $table='gonullu';
    protected  $fillable=[

        'gonullu_id'

    ];
    public function get_User()
    {
        return $this->hasOne('App\Models\User','id','gonullu_id');
    }                                // Baglanacagımız model // baglanacagımız sutun// baglanacak id

}
