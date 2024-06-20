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
        Schema::create('lojas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('codeLoja');
            $table->string('nomeLoja');
            $table->string('enderecoLoja');
            $table->string('imgLoja');
            $table->string('whatsapp', 15);
            $table->string('whatsapp2', 15);
            $table->string('whatsapp3', 15);
            $table->string('telefone', 15);
            $table->string('email');
            $table->string('segmentacao');
            $table->string('segmentacao2');
            $table->integer('estadoCode');
            $table->string('estado');
            $table->string('sigla', 2);
            $table->unique(['codeLoja', 'estadoCode']);
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lojas');
    }
};
