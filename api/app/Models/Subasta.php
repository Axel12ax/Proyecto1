<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subasta extends Model
{
    protected $table = 'subastas';
    protected $fillable = ['nombre', 'descripcion', 'precio_inicial', 'precio_final', 'fecha_inicio', 'fecha_fin', 'estado', 'id_categoria', 'id_marca', 'id_user'];
  
    
}
