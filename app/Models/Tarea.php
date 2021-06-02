<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    use HasFactory;

    //esta línea se escribe para aceptar inserción masiva de datos
    protected $fillable = ['titulo', 'descripcion', 'prioridad', 'tipo', 'fecha_limite'];
}
