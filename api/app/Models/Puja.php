<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Puja extends Model
{
    protected $table = 'pujas';
    protected $fillable = ['precio', 'id_vehiculo','id_subasta', 'is_user'];

    public function subasta()
    {
        return $this->hasOne(Subasta::class,'id', 'id_vehiculo');
    }
    public function user()
    {
        return $this->hasOne(User::class,'id', 'id_user');
    }
    public function vehiculo()
    {
        return $this->hasOne(Vehiculo::class,'id', 'id_vehiculo');
    }

}
