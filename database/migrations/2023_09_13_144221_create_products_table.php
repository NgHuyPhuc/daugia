<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->text('product_name');
            $table->bigInteger('categories_id')->unsigned();
            $table->string('main_image');
            $table->text('city_province');
            $table->text('description');
            $table->text('more_description');
            $table->text('ownership');
            $table->date('registration_time');
            $table->date('registration_deadline');
            $table->bigInteger('starting_price');
            $table->bigInteger('price_step');
            $table->bigInteger('participation_costs');
            $table->bigInteger('auction_deposit');
            $table->timestamps();

            $table->foreign('categories_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
