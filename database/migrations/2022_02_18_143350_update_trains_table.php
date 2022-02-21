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
            $table->date('startingDate')->nullable()->after('arrivingStation');
        });

        Schema::table('trains', function (Blueprint $table) {
            $table->date('arrivingDate')->nullable()->after('startingTime');
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
