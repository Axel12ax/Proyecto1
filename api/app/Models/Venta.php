<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $table = 'ventas';
    protected $fillable = ['precio', 'id_vehiculo', 'id_user'];

    public function vehiculo()
    {
        return $this->HasOne(vehiculo::Class,'id', 'id_vehiculo');
    }
    public function user()
    {
        return $this->HasOne(User::Class,'id', 'id_user');
    }

}

