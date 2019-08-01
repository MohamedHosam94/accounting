<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGivenBondsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('given_bonds', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->string('name');
            $table->string('amount');
            $table->string('amount_in_letters');
            $table->string('mobile_num');
            $table->string('payment_against');
            $table->string('bank');
            $table->string('type');

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
        Schema::dropIfExists('given_bonds');
    }
}
