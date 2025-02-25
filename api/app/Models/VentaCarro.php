<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VentaCarro extends Model
{
    protected $table = 'venta_carros';
    protected $fillable = ['precio', 'img', 'id_user', 'id_vehiculo'];
}
