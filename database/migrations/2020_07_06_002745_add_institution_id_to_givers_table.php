<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddInstitutionIdToGiversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('givers', function (Blueprint $table) {
            // Institution key
            $table->unsignedInteger('institution_id')->unique();
            $table->foreign('institution_id')->references('institution_id')->on('institutions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('givers', function (Blueprint $table) {
            //
        });
    }
}
