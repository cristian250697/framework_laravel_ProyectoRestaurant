<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    protected $table = "usuarios";
    protected $fillable = ["usuario", "nombre", "apellido", "contrasena", "status"];
}
