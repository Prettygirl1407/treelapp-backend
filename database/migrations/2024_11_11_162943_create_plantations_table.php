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
        Schema::create('plantations', function (Blueprint $table) {
            $table->id();
            $table->string('adresse');
            $table->integer('nbre_arbres');
            $table->date('date_plantation');
            $table->foreignId('citoyen_id')->constrained('citoyens')->onDelete('cascade');
            $table->foreignId('espece_id')->constrained('especes')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('plantations');
    }
};
