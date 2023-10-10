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
        Schema::create('treballadors', function (Blueprint $table) {
            $table->id('ID');
            $table->string('Nom');
            $table->string('Cognom');
            $table->string('Adreça');
            $table->string('Correu');
            $table->integer('Telefon');
            $table->string('DNI');
            $table->date('DataNaixement');
            $table->string('usuari');
            $table->string('contrasenya');
            $table->unsignedBigInteger('ServeiID');
            $table->foreign('ServeiID')->references('ID')->on('serveis');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('treballadors');
    }
};