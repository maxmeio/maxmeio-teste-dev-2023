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
        Schema::create('contato', function (Blueprint $table) {
            $table->id();
            $table->string('nome',55);
            $table->string('email',55);
            $table->string('interesse',100);
            $table->date('data_nascimento');
            $table->string('mensagem',200);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contato');
    }
};
