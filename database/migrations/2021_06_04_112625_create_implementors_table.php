<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImplementorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('implementors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ministry');
            $table->string('sub_ministry');
            $table->string('sector');
            $table->string('sub_sector');
            $table->string('division');
            $table->string('subdivision');

            $table->unsignedBigInteger('user');
            $table->foreign('user')->references('id')->on('users')->onDelete('restrict');

            $table->timestamps();

            $table->unique(['ministry', 'subdivision']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('implementors');
    }
}
