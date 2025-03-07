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
       schema::create('pujas',function(Blueprint $table){
           $table->increments('id');
           $table->string('precio');
           $table->timestamps();
           $table->integer('id_vehiculo')->unsigned();
           $table->foreign('id_vehiculo')->references('id')->on('vehiculos')->onDelete('cascade');
           
           $table->integer('id_user')->unsigned();
           $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
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
