<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropColumnCustomersColume extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('customers', function (Blueprint $table) {
            $table->dropColumn('useServiveFrequency');
            $table->dropColumn('qualityAmount');
            $table->dropColumn('qualityAmountThisYear');
            $table->dropColumn('climate');
            $table->dropColumn('riceVariety');
            $table->dropColumn('whereToShip');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('customers', function (Blueprint $table) {
            $table->boolean('useServiveFrequency')->default(false);
            $table->boolean('qualityAmount')->default(false);
            $table->boolean('qualityAmountThisYear')->default(false);
            $table->boolean('climate')->default(false);
            $table->boolean('riceVariety')->default(false);
            $table->boolean('whereToShip')->default(false);
        });
    }
}
