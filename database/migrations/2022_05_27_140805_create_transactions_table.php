<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('customer_no');
            $table->string('account_name');
            $table->string('account_no');
            $table->string('facility_type');
            $table->string('legal_form');
            $table->string('s_b');
            $table->string('maturity_date');
            $table->string('tenor');
            $table->string('drawdown_amount');
            $table->string('s_b_code');
            $table->string('cr_s_b');
            $table->string('type_sb');
            $table->string('amount');
            $table->string('date_trs');
            $table->string('sent_time');
            $table->string('reply_time');
            $table->string('sender');
            $table->string('officer');
            $table->string('rule_hitted');
            $table->string('justification');
            $table->string('disbursement_type');
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
        Schema::dropIfExists('transactions');
    }
}
