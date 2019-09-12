<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcquisitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acquisitions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('products_id');
            $table->integer('acquisition_types_id');
            $table->integer('licenses_id');
            $table->foreign('products_id')
            ->references('id')
            ->on('products')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreign('acquisition_types_id')
            ->references('id')
            ->on('acquisition_types')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreign('licenses_id')
            ->references('id')
            ->on('licenses')
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
        Schema::dropIfExists('acquisitions');
    }
}
