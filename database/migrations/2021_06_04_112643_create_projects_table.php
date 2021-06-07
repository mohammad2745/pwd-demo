<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->date('startDate');
            $table->date('endDate');
            $table->string('comment');
            $table->string('details');

            $table->unsignedBigInteger('implementor');
            $table->foreign('implementor')->references('id')->on('implementors')->onDelete('restrict');

            $table->timestamps();

            $table->unique(['name', 'details']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
