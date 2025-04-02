// pujas Migration
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pujas', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('precio', 10, 2); // Changed to decimal
            $table->timestamps();
            // Removed redundant id_vehiculo
            $table->integer('id_subasta')->unsigned();
            $table->foreign('id_subasta')->references('id')->on('subasta')->onDelete('cascade');
            $table->integer('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pujas'); // Added drop statement
    }
};