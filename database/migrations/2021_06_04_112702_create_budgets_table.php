<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBudgetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('budgets', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('project');
            $table->foreign('project')->references('id')->on('projects')->onDelete('restrict');

            $table->bigInteger('duration');
            $table->string('fiscal_year');
            $table->string('source_of_fund');
            $table->string('donner');
            $table->string('amount');
            $table->date('date');

            $table->timestamps();

            $table->unique(['donner', 'amount']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('budgets');
    }
}
