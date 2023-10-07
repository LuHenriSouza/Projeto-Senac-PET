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
        Schema::create('racas', function (Blueprint $table) {
            $table->increments('id_raca');
            $table->unsignedInteger('id_especie');
            $table->string('raca',100);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_especie')->references('id_especie')->on('especies');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('racas');
    }
};
