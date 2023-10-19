<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('tascas_de_neteja', function (Blueprint $table) {
        $table->id('TascaID');
        $table->string('Descripcio');
        // Agrega las demás columnas aquí
        $table->timestamps();
    });
}

    public function down(): void
    {
        Schema::dropIfExists('tascas_de_neteja');
    }
};
