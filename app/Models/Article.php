<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class Article extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    public $table = "artikel";
    protected $fillable = [
        'Judul', 'Kategori', 'id_user','Cover_Article', 'Paragraf', 'Email_AdmArticle', 'updated_at'
    ];

    protected $cast = [
        'Article_ID' => 'datetime',
    ];
    
    protected $dates = ['tanggal_berdiri'];
}
