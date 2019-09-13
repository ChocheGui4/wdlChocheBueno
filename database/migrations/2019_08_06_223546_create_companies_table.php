<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('companyrfc',13);
            $table->string('companyname',50);
            $table->string('companytelephone1',12);
            $table->string('companytelephone2',12);
            $table->string('companyemail1',45);
            $table->string('companyemail2',45);
            $table->integer('zipcode');
            $table->string('district',35);
            $table->string('street',35);
            $table->integer('insidenumber');
            $table->integer('exteriornumber');
            $table->boolean('companystatus');
            $table->integer('contact_companies_id');
            $table->foreign('contact_companies_id')
            ->references('id')
            ->on('contact_companies')
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
        Schema::dropIfExists('companies');
    }
}
