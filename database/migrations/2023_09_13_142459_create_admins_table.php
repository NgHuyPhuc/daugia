<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('password');
            $table->string('name');
            $table->string('dgv_chung_chi')->nullable();
            $table->date('dgv_ngay_cap_chung_chi')->nullable();
            $table->string('dgv_so_the_dgv')->nullable();
            $table->date('dgv_ngay_cap_the_dgv')->nullable();
            $table->string('dgv_noi_cap_the_dgv')->nullable();
            $table->integer('level');
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
        Schema::dropIfExists('admins');
    }
}
