<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_usuario';
    protected $fillable = ['id_usuario', 'nombre', 'apellido', 'user', 'password', 'tipo', 'activo'];
}
