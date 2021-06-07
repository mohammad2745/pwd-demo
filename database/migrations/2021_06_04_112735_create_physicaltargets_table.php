<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhysicaltargetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('physicaltargets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->year('year');
            $table->string('amount');
            $table->string('rate');
            $table->unsignedBigInteger('project');
            $table->foreign('project')->references('id')->on('projects')->onDelete('restrict');
            $table->timestamps();
            $table->unique(['amount', 'rate']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('physicaltargets');
    }
}
