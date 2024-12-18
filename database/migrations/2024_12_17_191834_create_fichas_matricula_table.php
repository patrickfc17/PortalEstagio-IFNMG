<?php

use App\Models\Estagiario;
use App\Models\Parecer;
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
        Schema::create('fichas_matricula', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Estagiario::class, 'estagiario_id')
                ->unique();
            $table->boolean('assinado')
                ->default(false);
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
        Schema::dropIfExists('fichas_matricula');
    }
};
