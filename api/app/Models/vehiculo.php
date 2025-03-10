<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class vehiculo extends Model
{
    protected $table = 'vehiculos';
    protected $fillable = ['NSerie','marca','modelo','color','año','img','precio','kilometros','descripcion','id_user'];

    public function user(){
        return $this->HasOne(User::Class,'id','id_user');
    }
    public function marca(){
        return $this->HasOne(Marca::Class,'id','id_marca');
    }
    public function categoria(){
        return $this->HasOne(Category::Class,'id','id_categoria');
    }
}


