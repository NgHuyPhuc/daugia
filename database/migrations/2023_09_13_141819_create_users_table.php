<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('password');
            $table->string('name');
            $table->string('phone');
            $table->string('imgccdtrc')->nullable();
            $table->string('imgccdsau')->nullable();
            $table->date('dob')->nullable();
            $table->integer('gender')->nullable();
            $table->string('address')->nullable();
            $table->string('cccd')->nullable();
            $table->date('ngay_cap_cccd')->nullable();
            $table->string('noi_cap_cccd')->nullable();
            $table->string('bank_account_number')->nullable();
            $table->string('bank')->nullable();
            $table->string('bank_branch')->nullable();
            $table->string('account_holder_name')->nullable();
            $table->string('dgv_chung_chi')->nullable();
            $table->date('dgv_ngay_cap_chung_chi')->nullable();
            $table->string('dgv_so_the_dgv')->nullable();
            $table->date('dgv_ngay_cap_the_dgv')->nullable();
            $table->string('dgv_noi_cap_the_dgv')->nullable();
            $table->string('token')->nullable();
            $table->integer('checkmail');
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
        Schema::dropIfExists('users');
    }
}
