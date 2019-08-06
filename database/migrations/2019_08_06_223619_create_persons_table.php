<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('rfc',20);
            $table->string('name',20);
            $table->string('lastName',40);
            $table->string('telephone',20);
            $table->string('email',32);
            $table->integer('zipCode');
            $table->string('district',45);
            $table->string('street',45);
            $table->integer('insideNumber');
            $table->integer('exteriorNumber');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('persons');
    }
}
