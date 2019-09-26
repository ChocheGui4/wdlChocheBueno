<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('maker',20);
            $table->string('processor',25);
            $table->integer('memory');
            $table->string('disc',20);
            $table->integer('storagem')->nullable();
            $table->string('unitstoragemail',3)->nullable();
            $table->integer('storage')->nullable();
            $table->string('unitstorage',3)->nullable();
            $table->integer('numberstorage')->nullable();
            $table->integer('year')->nullable();
            $table->string('period',6)->nullable();
            $table->integer('numberuser')->nullable();
            $table->string('offer',6);
            $table->boolean('cstatus');
            $table->integer('products_id');
            $table->foreign('products_id')
            ->references('id')
            ->on('products')
            ->onDelete('cascade')
            ->onUpdate('cascade');
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
        Schema::dropIfExists('categories');
    }
}
