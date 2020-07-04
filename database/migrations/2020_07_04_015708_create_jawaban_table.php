<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJawabanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblJawaban', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('jawaban');
            $table->tinyInteger('votes');
            $table->timestamps();
            $table->unsignedInteger('pertanyaan_id');
            $table->foreign('pertanyaan_id')->references('id')->on('tblpertanyaan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblJawaban');
    }
}
