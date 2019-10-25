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
            ['speciesName' => 'Lavender', 'hardinessZone' => 7, 'heatZone' => 7, 'waterNeed' => 'Low', 'sunExposure' => 'Full Sun', 'soilType' => 'Chalk, Loam, Sand'], ['speciesName' => 'Peace Lily', 'hardinessZone' => 11, 'heatZone' => 5, 'waterNeed' => 'Low', 'sunExposure' => 'Low/Indirect', 'soilType' => 'Well Draining / All Purpose'], ['speciesName' => 'Calathea', 'hardinessZone' => 9, 'heatZone' => 5, 'waterNeed' => 'Medium', 'sunExposure' => 'Low/Indirect', 'soilType' => 'Well Draining / All Purpose'], ['speciesName' => 'Freckle Face', 'hardinessZone' => 11, 'heatZone' => 6, 'waterNeed' => 'Medium', 'sunExposure' => 'Low/Indirect', 'soilType' => 'Well Draining / All Purpose'], ['speciesName' => 'Syngonium', 'hardinessZone' => 11, 'heatZone' => 6, 'waterNeed' => 'Medium', 'sunExposure' => 'Medium / Bright Indirect', 'soilType' => 'Well Draining / All Purpose'], ['speciesName' => 'Rubber Plant', 'hardinessZone' => 11, 'heatZone' => 7, 'waterNeed' => 'Low', 'sunExposure' => 'Medium / Bright Indirect', 'soilType' => 'Well Draining / All Purpose']]);
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
