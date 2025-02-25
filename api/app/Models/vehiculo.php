<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class vehiculo extends Model
{
    protected $table = 'vehiculos';
    protected $fillable = ['NSerie','marca','modelo','color','año','img','precio','kilometros','descripcion','id_user'];
}
