<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pessoa_info', function (Blueprint $table) {
            $table->increments('id_pessoa_info');
            $table->unsignedBigInteger('id_pessoa');
            $table->boolean('teve_animal');
            $table->boolean('animal_guarda');
            $table->integer('qnt_pessoa_casa');
            $table->text('motivacao');
            $table->text('observacoes');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_pessoa')->references('id_pessoa')->on('pessoas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pessoa_info');
    }
};
