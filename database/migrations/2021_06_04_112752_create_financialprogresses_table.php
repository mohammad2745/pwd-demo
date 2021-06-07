<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinancialprogressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('financialprogresses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('project');
            $table->foreign('project')->references('id')->on('projects')->onDelete('restrict');
            $table->string('amount');
            $table->string('rate');
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
        Schema::dropIfExists('financialprogresses');
    }
}
