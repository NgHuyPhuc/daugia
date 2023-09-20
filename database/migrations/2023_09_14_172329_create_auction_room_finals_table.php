<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuctionRoomFinalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auction_room_finals', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_product')->unsigned();
            $table->foreign('id_product')->references('id')->on('products');

            $table->bigInteger('id_auction_room')->unsigned();
            $table->foreign('id_auction_room')->references('id')->on('auction_rooms');

            $table->bigInteger('id_dgv')->unsigned();
            $table->foreign('id_dgv')->references('id')->on('users');

            $table->bigInteger('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('users');
            
            $table->bigInteger('bidding_price');
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
        Schema::dropIfExists('auction_room_finals');
    }
}
