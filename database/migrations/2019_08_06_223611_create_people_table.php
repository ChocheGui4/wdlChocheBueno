<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->increments('id');
            $table->string('rfc',13);
            $table->string('name',25);
            $table->string('lastname',35);
            $table->string('img',255);
            $table->string('telephone1',12);
            $table->string('telephone2',12)->nullable();
            $table->string('email1',5);
            $table->string('email2',5)->nullable();
            $table->integer('zipcode');
            $table->string('district',35);
            $table->string('street',35);
            $table->integer('exteriornumber');
            $table->integer('insidenumber');
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
        Schema::dropIfExists('people');
    }
}
