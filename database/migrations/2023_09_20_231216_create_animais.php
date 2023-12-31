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
        Schema::create('animais', function (Blueprint $table) {
            $table->increments('id_animal');
            $table->string('nome',45);
            $table->string('cor',45);
            $table->date('idade');
            $table->unsignedInteger('id_sexo');
            $table->unsignedInteger('id_tamanho');
            $table->unsignedInteger('id_raca');
            $table->text('observacoes');
            $table->boolean('status')->default(false);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animais');
    }
};
