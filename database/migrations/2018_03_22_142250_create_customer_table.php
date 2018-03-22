<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer', function (Blueprint $table) {
            $table->integer('account_number')->primary();
            $table->string('cust_username');
            $table->string('cust_segment');
            $table->string('cust_category');
            $table->string('dukcapil_status');
            $table->integer('longitude');
            $table->integer('latitude');
            $table->string('residence_type');
            $table->string('npwp');
            $table->date('birth_date');
            $table->boolean('is_converted_from_lead');
            $table->string('cust_status');
            $table->string('occupation');
            $table->string('primary_mobile');
            $table->string('bss_status');
            $table->string('corp_tax_id');
            $table->string('shared_balance_group');
            $table->timestamp('created')->useCurrent();
            $table->timestamp('updated')->useCurrent()->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer');
    }
}
