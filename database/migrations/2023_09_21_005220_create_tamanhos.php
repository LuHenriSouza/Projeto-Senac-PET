<?php

use App\Models\Tamanho;
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
        Schema::create('tamanhos', function (Blueprint $table) {
            $table->increments('id_tamanho');
            $table->char('tamanho',1);
            $table->timestamps();
            $table->softDeletes();

        });

        Tamanho::create(['tamanho' => 'P']);
        Tamanho::create(['tamanho' => 'M']);
        Tamanho::create(['tamanho' => 'G']);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tamanhos');
    }
};
