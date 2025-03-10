<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subasta extends Model
{
    protected $table = 'subasta';
    protected $fillable = ['nombre', 'precio_inicial', 'precio_final', 'fecha_inicio', 'fecha_fin', 'estado', 'id_vehiculo', 'id_user'];

    public function user()
    {
        return $this->hasOne(User::class,'id', 'id_user');
    }

    public function vehiculo()
    {
        return $this->hasOne(vehiculo::class,'id', 'id_vehiculo');
    }
  
    
}
