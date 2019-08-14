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
            $table->string('rfc',13);
            $table->string('name',50);
            $table->string('telephone',12);
            $table->string('email',45);
            $table->integer('zipcode');
            $table->string('district',35);
            $table->string('street',35);
            $table->integer('insidenumber');
            $table->integer('exteriornumber');
            $table->integer('contacts_id')->nullable();
            $table->foreign('contacts_id')
            ->references('id')
            ->on('contacts')
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
