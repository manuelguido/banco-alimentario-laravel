<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donations', function (Blueprint $table) {
            $table->increments('id');
            $table->smallInteger('giver_id')->unsigned();
            $table->foreign('giver_id')->references('id')->on('givers');
            $table->string('status');
            $table->date('date_from')->nullable()->default(NULL);
            $table->date('date_to')->nullable()->default(NULL);
            $table->time('time_from')->nullable()->default(NULL);
            $table->time('time_to')->nullable()->default(NULL);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donations');
    }
}
