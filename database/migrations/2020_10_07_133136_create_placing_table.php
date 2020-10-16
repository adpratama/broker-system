<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlacingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('placings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('status');
            $table->date('date')->nullable();
            $table->string('insurance_id');
            $table->string('client_id');
            $table->date('period_from');
            $table->date('period_to');
            $table->string('cover_type_id');
            $table->string('currency_id');
            $table->integer('compensation');
            $table->integer('premium_warranty');
            $table->integer('rate')->nullable();
            $table->integer('sum_insured');
            $table->integer('premi');
            $table->longText('content');
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
        Schema::dropIfExists('placings');
    }
}
