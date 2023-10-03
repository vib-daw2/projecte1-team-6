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
        Schema::create('serveis', function (Blueprint $table) {
            $table->id('ID');
            $table->date('DataInici');
            $table->date('DataFi');
            $table->string('TipusDeServei');
            $table->unsignedBigInteger('ClientID');
            $table->foreign('ClientID')->references('ID')->on('clients');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('serveis');
    }
};