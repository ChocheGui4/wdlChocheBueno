<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyCopiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_copies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('companyrfc',13);
            $table->string('companyname',50);
            $table->string('companyimg',255);
            $table->string('companytelephone1',12);
            $table->string('companytelephone2',12)->nullable();
            $table->string('companyemail1',45);
            $table->string('companyemail2',45)->nullable();
            $table->string('zipcode',5);
            $table->string('district',35);
            $table->string('street',35);
            $table->integer('insidenumber');
            $table->integer('exteriornumber');
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
        Schema::dropIfExists('company_copies');
    }
}
