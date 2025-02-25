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
        schema::create('imgs',function(Blueprint $table){
            $table->increments('id');
            $table->string('url');
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
