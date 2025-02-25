<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        schema::create('subasta',function(Blueprint $table){
            $table->increments('id');
            $table->string('precio_base');
            $table->string('precio_minimo');
            $table->datetime('fecha_inicio');
            $table->datetime('fecha_fin');
            $table->string('estado');
            $table->integer('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('users');
            $table->integer('id_vehiculo')->unsigned();
            $table->foreign('id_vehiculo')->references('id')->on('vehiculos');
            $table->timestamps();
        } );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
