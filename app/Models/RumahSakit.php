<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class RumahSakit extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    public $table = "rumahsakit";
    protected $fillable = [
        'Name_RS', 'Alamat_RS', 'Telpon_RS', 'Foto_RS'
    ];

    protected $cast = [
        'RS_ID' => 'datetime',
    ];
}
