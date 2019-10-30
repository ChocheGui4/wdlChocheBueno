<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactBranchCopiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_branch_copies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',25);
            $table->string('lastname',35);
            $table->string('telephone1',12);
            $table->string('telephone2',12)->nullable();
            $table->string('email',45);
            $table->string('email2',45)->nullable();
            $table->string('area',40);
            $table->integer('branches_id');
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
        Schema::dropIfExists('contact_branch_copies');
    }
}
