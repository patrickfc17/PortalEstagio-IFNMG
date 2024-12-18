<?php

use App\Models\Estagiario;
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
        Schema::create('documentos', function (Blueprint $table) {
            $table->string('cpf', 11)
                ->primary();
            $table->foreignIdFor(Estagiario::class, 'estagiario_id')
                ->unique();
            $table->string('rg', 10);
            $table->string('orgao_expedidor', 50);
            $table->timestamps();

            $table->foreign('estagiario_id')
                ->references('id')
                ->on((new Estagiario())->getTable())
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documentos');
    }
};
