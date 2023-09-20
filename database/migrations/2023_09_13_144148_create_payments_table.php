<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('users');

            $table->bigInteger('id_product')->unsigned();
            $table->foreign('id_product')->references('id')->on('products');
            
            $table->string('bank_account_number')->nullable();
            $table->string('bank')->nullable();
            $table->string('account_holder_name')->nullable();
            $table->bigInteger('total_amount');
            $table->bigInteger('state');
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
        Schema::dropIfExists('payments');
    }
}
