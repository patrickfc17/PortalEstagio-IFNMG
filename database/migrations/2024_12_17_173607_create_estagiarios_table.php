<?php

use App\Enums\SexosEnum;
use App\Enums\EstadosCivisEnum;
use App\Models\User;
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
        Schema::create('estagiarios', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class, 'user_id')
                ->unique();
            $table->date('data_nascimento');
            $table->enum('estado_civil', cases(EstadosCivisEnum::class));
            $table->enum('sexo', cases(SexosEnum::class));
            $table->string('telefone_fixo', 14)
                ->nullable();
            $table->string('celular', 14)
                ->nullable();
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')
                ->on((new User())->getTable())
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estagiarios');
    }
};
