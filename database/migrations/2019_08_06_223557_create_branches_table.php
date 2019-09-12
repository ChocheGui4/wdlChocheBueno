<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branches', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',50);
            $table->string('branchtelephone1',12);
            $table->string('branchtelephone2',12);
            $table->string('branchemail1',45);
            $table->string('branchemail2',45);
            $table->integer('zipcode');
            $table->string('district',35);
            $table->string('street',35);
            $table->integer('insidenumber');
            $table->integer('exteriornumber');
            $table->integer('contact_branches_id');
            $table->foreign('contact_branches_id')
            ->references('id')
            ->on('contact_branches')
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
        Schema::dropIfExists('branches');
    }
}
