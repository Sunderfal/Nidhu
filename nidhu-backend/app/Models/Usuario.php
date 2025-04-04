<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Usuario extends Authenticatable {

    use HasFactory, Notifiable;

    protected $table = "usuario";
    protected $primaryKey = "idUsuario";
    protected $fillable = ["nombre", "email", "password", "avatar", "idPiso"];
    protected $hidden = ["password"];

}