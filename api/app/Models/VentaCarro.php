<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VentaCarro extends Model
{
    protected $table = 'ventas_directa';
    protected $fillable = ['precio', 'img', 'id_user', 'id_vehiculo'];

    public function vehiculo()
    {
        return $this->hasOne(Vehiculo::class, 'id', 'id_vehiculo');
    }
    public function user()
    {
        return $this->hasOne(User::class, 'id', 'id_user');
    }
}
