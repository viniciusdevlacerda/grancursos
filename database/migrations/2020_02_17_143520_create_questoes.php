<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestoes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_questoes', function (Blueprint $table) {
            $table->bigIncrements('id_questao');
            $table->text('tx_questao');
            $table->integer('id_orgao');
            $table->integer('id_banca');
            $table->integer('id_assunto');
            $table->string('ds_assunto');
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
        Schema::dropIfExists('tb_questoes');
    }
}
