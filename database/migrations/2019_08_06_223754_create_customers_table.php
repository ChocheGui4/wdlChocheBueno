<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('persons_id');
            $table->integer('acquisitions_id');
            $table->integer('companies_id');
            $table->foreign('persons_id')
            ->references('id')
            ->on('persons')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreign('acquisitions_id')
            ->references('id')
            ->on('acquisitions')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreign('companies_id')
            ->references('id')
            ->on('companies')
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
        Schema::dropIfExists('customers');
    }
}
