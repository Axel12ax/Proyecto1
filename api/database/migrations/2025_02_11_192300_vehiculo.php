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
        schema::create('vehiculos',function(Blueprint $table){
            $table->increments('id');
            $table->string('NSerie');
            $table->string('modelo');
            $table->string('color');
            $table->string('año');
            $table->string('img');
            $table->string('precio');
            $table->string('kilometros');
            $table->string('descripcion');
            $table->integer('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->integer('id_marca')->unsigned();
            $table->foreign('id_marca')->references('id')->on('marcas')->onDelete('cascade');
            $table->integer('id_categoria')->unsigned();
            $table->foreign('id_categoria')->references('id')->on('categorys')->onDelete('cascade');
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
