<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpeciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('species', function (Blueprint $table) {
            $table->bigIncrements('speciesID');
            $table->string('speciesName');
            $table->integer('hardinessZone');
            $table->integer('heatZone');
            $table->string('waterNeed');
            $table->string('sunExposure');
            $table->string('soilType');
            $table->timestamps();
        });

        DB::table('species')->insert([
            ['speciesName' => 'Lavender', 'hardinessZone' => 11, 'heatZone' => s]])
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('species');
    }
}
