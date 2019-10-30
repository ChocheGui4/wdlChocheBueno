<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBranchCopiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branch_copies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('branchname',50);
            $table->string('branchimg',255);
            $table->string('branchtelephone1',12);
            $table->string('branchtelephone2',12)->nullable();
            $table->string('branchemail1',45);
            $table->string('branchemail2',45)->nullable();
            $table->string('zipcode',5);
            $table->string('district',35);
            $table->string('street',35);
            $table->integer('insidenumber');
            $table->integer('exteriornumber');
            $table->integer('companies_id');
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
        Schema::dropIfExists('branch_copies');
    }
}
