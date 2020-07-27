<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelSolicitacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitacaos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('item');
            $table->string('tipo');
            $table->string('descricao');
            $table->string('qtdUni');
            $table->string('unidade');
            $table->string('tipoUni');
            $table->string('dataAbertura');
            $table->string('dataFinal');
            $table->integer('status');
            $table->integer('id_produto')->unsigned();
            $table->foreign('id_produto')->references('id')->on('fornecedor')->onDelete('cascade')->onUpdate('cascade');

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
        Schema::dropIfExists('solicitacaos');
    }
}
