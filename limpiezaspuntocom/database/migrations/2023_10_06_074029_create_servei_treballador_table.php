<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('servei_treballador', function (Blueprint $table) {
            $table->unsignedBigInteger('ServeiID');
            $table->unsignedBigInteger('TreballadorID');
    
            $table->foreign('ServeiID')->references('ID')->on('serveis')->onDelete('cascade');
            $table->foreign('TreballadorID')->references('ID')->on('treballadors')->onDelete('cascade');
        });
    }
    
    public function down(): void
    {
        Schema::dropIfExists('servei_treballador');
    }
};
