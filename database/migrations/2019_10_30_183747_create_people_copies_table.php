<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleCopiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people_copies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('rfc',13);
            $table->string('name',25);
            $table->string('lastname',35);
            $table->string('img',255);
            $table->string('telephone1',12);
            $table->string('telephone2',12)->nullable();
            $table->string('email',45);
            $table->string('email2',45)->nullable();
            $table->string('zipcode',5);
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
        Schema::dropIfExists('people_copies');
    }
}
