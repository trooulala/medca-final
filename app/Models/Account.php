<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class Account extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    public $table = "user";
    protected $fillable = [
        'Name', 'Username', 'Email', 'Password'
    ];

    protected $hidden = [
        'Password'
    ];

    protected $cast = [
        'AccountID' => 'datetime',
    ];
}
