<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    public $table = "dokter";
    protected $fillable = [
        'Name_Dok', 'id_rs','Spesialisasi', 'Tempat_RS', 'Rating', 'Email_Dok', 'Pass_Dok'
    ];

    protected $cast = [
        'Dokter_ID' => 'datetime',
    ];
}