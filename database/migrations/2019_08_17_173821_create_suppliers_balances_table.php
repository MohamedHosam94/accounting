<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuppliersBalancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers_balances', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->unsignedBigInteger('user_id');
            
            $table->string('name');
            $table->string('email')->unique();
            $table->text('address');
            $table->string('mobile_num');
            $table->string('account_num');
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
        Schema::dropIfExists('suppliers_balances');
    }
}
