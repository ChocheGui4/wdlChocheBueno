<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryCopiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_copies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('maker',20)->nullable();
            $table->string('processor',25)->nullable();
            $table->string('memory',5)->nullable();
            $table->string('disc',20)->nullable();
            $table->integer('storagem')->nullable();
            $table->string('unitstoragemail',3)->nullable();
            $table->integer('storage')->nullable();
            $table->string('unitstorage',3)->nullable();
            $table->integer('numberstorage')->nullable();
            $table->integer('year')->nullable();
            $table->string('period',6)->nullable();
            $table->integer('numberuser')->nullable();
            $table->string('offer',6)->nullable();
            $table->string('name_product');
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
        Schema::dropIfExists('category_copies');
    }
}
