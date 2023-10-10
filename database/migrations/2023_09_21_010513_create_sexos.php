<?php

use App\Models\Sexo;
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
        Schema::create('sexos', function (Blueprint $table) {
            $table->increments('id_sexo');
            $table->string('sexo',20);
            $table->timestamps();
            $table->softDeletes();

        });

        Sexo::create(['sexo' => 'Masculino']);
        Sexo::create(['sexo' => 'Feminino']);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sexos');
    }
};
