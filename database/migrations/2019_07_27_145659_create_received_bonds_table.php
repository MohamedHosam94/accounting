<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReceivedBondsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('received_bonds', function (Blueprint $table) {

            $table->bigIncrements('id');

            $table->unsignedBigInteger('user_id');
            
            $table->string('name');
            $table->string('amount');
            $table->string('amount_in_letters');
            $table->date('date');
            $table->string('mobile_num');
            $table->string('payment_against');
            $table->string('bank');
            $table->string('type');

            $table->timestamps();

            $table->index('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('received_bonds');
    }
}
