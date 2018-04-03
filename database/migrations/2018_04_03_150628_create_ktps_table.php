<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKtpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ktps', function (Blueprint $table) {
            $table->integer('cust_id')->primary(); //
            $table->string('kk_number'); //1 kk many ktp
            $table->string('first_name');
            $table->string('last_name');
            $table->string('gender');
            $table->date('birth_date');
            $table->string('residence_type');
            $table->string('occupation');
        });

        Schema::table('ktps', function($table) {
            $table->foreign('kk_number')->references('kk_number')->on('kks');
        });

        Schema::table('pics', function($table) {
            $table->foreign('cust_id')->references('cust_id')->on('ktps');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ktps');
    }
}
