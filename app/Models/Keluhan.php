<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class Keluhan extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    public $table = "ajukan_keluhan";
    protected $fillable = [
        'Email_Pasien', 'id_pasien', 'id_dok','NamaPasien', 'Email_Dokter', 'Nama_Dokter', 'Keluhan'
    ];

    protected $cast = [
        'Tiket_Keluhan' => 'datetime',
    ];
}
