<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('histories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('product');
            $table->string('serial')->nullable();
            $table->string('time',25)->nullable();
            $table->string('period',6)->nullable();
            $table->integer('storage')->nullable();
            $table->string('unitstorage',3)->nullable();
            $table->string('description')->nullable();
            $table->integer('company')->nullable();
            $table->integer('branch')->nullable();
            $table->integer('people')->nullable();
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
        Schema::dropIfExists('histories');
    }
}
