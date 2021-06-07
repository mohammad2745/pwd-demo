<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhysicalprogressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('physicalprogresses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('project');
            $table->foreign('project')->references('id')->on('projects')->onDelete('restrict');
            $table->year('year');
            $table->string('amount');
            $table->string('rate');
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
        Schema::dropIfExists('physicalprogresses');
    }
}
