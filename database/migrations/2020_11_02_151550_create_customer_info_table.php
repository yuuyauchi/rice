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
            $table->string('userName')->nullable();
            $table->string('address')->nullable();
            $table->string('telephoneNumber',15)->nullable();
            $table->string('usageTimesEver')->nullable();
            $table->string('usageAmountEver')->nullable();
            $table->string('harvestAmountPreYear')->nullable();
            $table->string('usageAmountThisYear')->nullable();
            $table->string('usageAreaThisYear')->nullable();
            $table->string('climate')->nullable();
            $table->string('riceVariety')->nullable();
            $table->string('whereToShip')->nullable();
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
