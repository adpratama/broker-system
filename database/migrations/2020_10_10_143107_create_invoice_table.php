<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('status');
            $table->date('date')->nullable();
            $table->string('quotation_id');
            $table->string('policy_number');
            $table->integer('kurs');
            $table->integer('policy_cost');
            $table->integer('stamp_duty');
            $table->integer('others');
            $table->float('admin_cost');
            $table->longText('particulars');
            $table->string('signfor');
            $table->softDeletes();
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
        Schema::dropIfExists('invoices');
    }
}
