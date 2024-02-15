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
        Schema::create('apidatas', function (Blueprint $table) {
            $table->id();
            $table->string('name');// nombre
            $table->string('unit');//unidad de medida por ejemplo C°
            $table->decimal('value', 12, 2);//guarda en decimal despúes convierto en codigo a entero si necesito
            $table->string('time');//fecha hora de el dato de la api
            $table->timestamps(); //fecha y hora de alta local del dato
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apidatas');
    }
};
