<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string("company", 120);
            $table->string("startingStation", 50);
            $table->string("arrivingStation", 50);
            $table->time("startingTime");
            $table->time("arrivingTime");
            $table->string("trainCode", 15);
            $table->string("wagonNumber", 3);
            $table->boolean("inTime");
            $table->boolean("delayed");
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
        Schema::dropIfExists('trains');
    }
}
