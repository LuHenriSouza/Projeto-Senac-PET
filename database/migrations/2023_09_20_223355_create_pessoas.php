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
            $table->string('nome',70)->nullable();
            $table->string('email',45)->nullable();
            $table->char('telefone',11)->nullable();
            $table->text('endereco')->nullable();
            $table->char('cep',8)->nullable();
            $table->text('residencia_desc')->nullable();
            $table->string('cidade',45)->nullable();
            $table->timestamps();
            $table->softDeletes();


        });
    }

    public function down()
    {
        Schema::dropIfExists('pessoas');
    }
}
// test
