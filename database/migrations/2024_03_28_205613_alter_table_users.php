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
        Schema::table('users', function (Blueprint $table) {
            $table->string('username')->unique()->nullable(false); // Definindo 'username' como único
            $table->string('cpf')->unique()->nullable(false); // Adicionando a nova coluna 'status'
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropUnique(['username']); // Remove o índice único de 'username'
            $table->dropUnique(['cpf']); // Remove o índice único de 'cpf'
            $table->string('username')->nullable()->change(); // Altera 'username' para aceitar valores nulos
            $table->string('cpf')->nullable()->change(); // Altera 'cpf' para aceitar valores nulos
        });
    }
};
