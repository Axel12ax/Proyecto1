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
        schema::create('ventas_Directa',function(Blueprint $table){
            $table->increments('id');
            $table->string('precio');
            $table->string('img');
            
            $table->timestamps();
            $table->integer('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('users');
            $table->integer('id_vehiculo')->unsigned();
            $table->foreign('id_vehiculo')->references('id')->on('vehiculos');
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
