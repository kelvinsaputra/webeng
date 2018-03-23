<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pics', function (Blueprint $table) {
            $table->increments('pic_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('gender');
            $table->string('facebook_acc_id');
            $table->string('cust_id_type');
            $table->string('contact_number');
            $table->integer('cust_id');
            $table->string('mother_name');
            $table->string('primary_email');
            $table->string('pref_language');
            $table->string('kk_number');
            $table->string('home_phone');
            $table->string('home_status');
            $table->string('office_phone');
            $table->string('marital_status');
            $table->string('fax_number');
        });

        Schema::table('pics', function($table) {
            $table->foreign('cust_id')->references('account_number')->on('customers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pics');
    }
}
