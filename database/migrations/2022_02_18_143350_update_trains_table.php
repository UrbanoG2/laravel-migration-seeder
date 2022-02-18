<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->string('startingDate')->after('arrivingStation');
        });

        Schema::table('trains', function (Blueprint $table) {
            $table->string('arrivingDate')->after('startingTime');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->dropColumn('startingDate');
        });

        Schema::table('trains', function (Blueprint $table) {
            $table->dropColumn('arrivingDate');
        });
    }
}
