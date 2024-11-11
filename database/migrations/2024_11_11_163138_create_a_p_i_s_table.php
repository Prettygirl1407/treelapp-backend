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
        Schema::create('api_meteo', function (Blueprint $table) {
            $table->id();
            $table->float('temperature');
            $table->float('humidite');
            $table->string('previsions');
            $table->date('date_releve');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('a_p_i_s');
    }
};
