// subasta Migration
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('subasta', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('precio_base', 10, 2); // Changed to decimal
            $table->decimal('precio_minimo', 10, 2); // Changed to decimal
            $table->datetime('fecha_inicio');
            $table->datetime('fecha_fin');
            $table->string('estado'); // Consider using enum(['activa', 'finalizada', etc.])
            $table->integer('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->integer('id_vehiculo')->unsigned();
            $table->foreign('id_vehiculo')->references('id')->on('vehiculos')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('subasta'); // Added drop statement
    }
};