<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pessoas', function (Blueprint $table) {
            $table->increments('id_pessoa');
            $table->unsignedInteger('id_user');
            $table->char('telefone',20);
            $table->char('cep',8);
            $table->string('estado',45);
            $table->string('cidade',45);
            $table->string('endereco',100);
            $table->string('numero',10);
            $table->string('bairro',45);
            $table->text('residencia_desc')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_user')->references('id')->on('users');

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pessoas');
    }
};
