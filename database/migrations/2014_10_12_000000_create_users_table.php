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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        \App\Models\User::factory()->create([
            'name' => 'Luiz',
            'email' => 'luiz@gmail.com',
            'password' => '$2y$10$3QAjPxdKq3A2VkZXw8E9Z.z4MJlTbg3ZgWRgVEM8LbGzXNJ2h24mm' //20032002l
        ]);

    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
