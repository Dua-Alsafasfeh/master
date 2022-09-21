<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            $table->foreignId("from_id")->constrained("cities")->onDelete("cascade");
            $table->foreignId("to_id")->constrained("cities")->onDelete("cascade");
            $table->foreignId("driver_id")->constrained()->onDelete("cascade");
            $table->foreignId("bus_id")->constrained()->onDelete("cascade");
            $table->date("date");
            $table->time("time");
            $table->double("price")->default(1);
            $table->string('path');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trips');
    }
}
