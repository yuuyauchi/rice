<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('userName');
            $table->string('address');
            $table->integer('telephoneNumber');
            $table->integer('useServiveFrequency');
            $table->string('qualityAmount');
            $table->string('qualityAmountThisYear');
            $table->string('climate');
            $table->string('riceVariety');
            $table->string('whereToShip');
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
        Schema::dropIfExists('customers');
    }
}
