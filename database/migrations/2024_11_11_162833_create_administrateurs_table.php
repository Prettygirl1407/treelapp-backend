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
        Schema::create('administrateurs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('utilisateur_id')->constrained('utilisateurs')->onDelete('cascade');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('administrateurs');
    }
};
