<?php

use App\Enums\StatusParecerEnum;
use App\Models\Assinatura;
use App\Models\FichaMatricula;
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
        Schema::create('pareceres', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(FichaMatricula::class, 'ficha_matricula_id');
            $table->foreignIdFor(Assinatura::class, 'assinatura_id')
                ->nullable();
            $table->enum('status', cases(StatusParecerEnum::class));
            $table->date('data')
                ->default(now());
            $table->string('uf', 2);
            $table->text('dependencias')
                ->nullable();
            $table->timestamps();

            $table->foreign('assinatura_id')
                ->references('id')
                ->on((new Assinatura())->getTable())
                ->onUpdate('cascade')
                ->onDelete('set null');

            $table->foreign('ficha_matricula_id')
                ->references('id')
                ->on((new FichaMatricula())->getTable())
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pareceres');
    }
};
