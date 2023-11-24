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
        Schema::create('leitura_sensors', function (Blueprint $table) {
            $table->id();
            $table->string('cod_sensor', 255);
            $table->float('valor');
            $table->unsignedBigInteger('setor_id');
            $table->string('grandeza', 10);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leitura_sensors');
    }
};
