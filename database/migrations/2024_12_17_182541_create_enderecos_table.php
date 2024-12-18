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
        Schema::create('enderecos', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Estagiario::class, 'estagiario_id');
            $table->string('rua', 255);
            $table->string('bairro', 200);
            $table->string('uf', 2);
            $table->string('cep', 8);
            $table->string('cidade', 75);
            $table->string('numero', 10)
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
        Schema::dropIfExists('enderecos');
    }
};
