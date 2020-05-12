<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('donation_id')->unsigned();
            $table->foreign('donation_id')->references('id')->on('donations');
            $table->string('name');
            $table->smallInteger('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories');
            $table->smallInteger('type_id')->unsigned();
            $table->foreign('type_id')->references('id')->on('types');
            $table->date('exp_date')->nullable()->default(NULL);
            $table->bigInteger('amount');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}