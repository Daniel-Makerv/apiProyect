<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyect extends Model
{
    use HasFactory;
    protected $table = 'proyects';
  
    protected $fillable = [
        'nombre_cliente',
        'fecha_inicio',
        'lenguaje_programacion',
        'duracion_estimada',
        'proyect_manager',
        'observaciones',
    ];
}
