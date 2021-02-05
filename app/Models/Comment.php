<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table='comment';
    protected  $fillable=[
        'fullname',

        'email',
        'comment',
        'ip_address',
        'status',
        'device'

    ];
}
