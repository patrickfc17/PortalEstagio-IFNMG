<?php

use App\Enums\PeriodosEnum;
use App\Enums\TurnosEnum;
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
        Schema::create('matriculas', function (Blueprint $table) {
            $table->string('numero_matricula')
                ->primary();
            $table->foreignIdFor(Estagiario::class, 'estagiario_id')
                ->unique();
            $table->string('curso', 200);
            $table->string('turma', 100);
            $table->boolean('cursando')
                ->default(true);
            $table->enum('tipo_periodo', cases(PeriodosEnum::class));
            $table->unsignedTinyInteger('numero_periodo');
            $table->enum('turno', cases(TurnosEnum::class));
            $table->boolean('integralizado');
            $table->decimal('periodo_integralizacao', 2, 1)
                ->nullable();
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
        Schema::dropIfExists('matriculas');
    }
};
