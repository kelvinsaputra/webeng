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
            $table->string('first_name'); //
            $table->string('last_name'); //
            $table->string('gender'); //
            $table->string('facebook_acc_id');
            $table->string('cust_id_type');
            $table->string('contact_number');
            $table->integer('cust_id'); //foreign keyin jd bisa ambil gender fname lname dkk dari ktp langsung, isi ini aja dulu pertama kali
            $table->string('mother_name');
            $table->string('primary_email');
            $table->string('pref_language');
            $table->string('kk_number'); //salah wj ini-> //masukkin kknumber ada button cek kalo valid input di field fname dkk lgsg dari ktp
            $table->string('home_phone');
            $table->string('home_status');
            $table->string('office_phone');
            $table->string('marital_status');
            $table->string('fax_number');
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
