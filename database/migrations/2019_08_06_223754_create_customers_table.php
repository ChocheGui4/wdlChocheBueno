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
            $table->integer('people_id')->nullable();
            $table->integer('acquisitions_id')->nullable();
            $table->integer('companies_id')->nullable();
            $table->integer('branches_id')->nullable();
            $table->boolean('customstatus');
            $table->foreign('people_id')
            ->references('id')
            ->on('people')
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
            $table->foreign('branches_id')
            ->references('id')
            ->on('branches')
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
