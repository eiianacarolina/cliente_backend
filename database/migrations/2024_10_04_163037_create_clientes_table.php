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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nome')->nullable(false);
            $table->string('celular')->nullable(false);
            $table->string('cpf')->nullable(false);
            $table->string('e-mail')->nullable(false);
            $table->date('data_nascimento')->nullable(false);
            $table->string('cidade')->nullable(false);
            $table->string('estado')->nullable(false);
            $table->string('pais')->nullable(false);
            $table->string('rua')->nullable(false);
            $table->string('numero')->nullable(false);
            $table->string('bairro')->nullable(false);
            $table->string('cep')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
