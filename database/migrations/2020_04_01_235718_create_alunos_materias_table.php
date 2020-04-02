<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlunosMateriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aluno_materias', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('alunos_id');
            $table->foreign('alunos_id')->references('id')->on('alunos');
            $table->unsignedBigInteger('materias_id');
            $table->foreign('materias_id')->references('id')->on('materias');

            $table->softDeletes();
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
        Schema::dropIfExists('aluno_materias');
    }
}
