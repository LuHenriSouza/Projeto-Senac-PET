<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePessoasTable extends Migration
{
    public function up()
    {
        Schema::create('pessoas', function (Blueprint $table) {
            $table->increments('id_pessoas');
            $table->string('nome');
            $table->string('email');
            $table->string('telefone');
            $table->string('endereco');
            $table->string('cep');
            $table->text('residencia_desc');
            $table->string('cidade');
            $table->timestamps();

            // $table->foreign('id_historicos_pessoas')
            //     ->references('id')->on('historicos_pessoas')
            //     ->onDelete('set null'); // Define a ação em caso de exclusão
        });
    }

    public function down()
    {
        Schema::dropIfExists('pessoas');
    }
}
