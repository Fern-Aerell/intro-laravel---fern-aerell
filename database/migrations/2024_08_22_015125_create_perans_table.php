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
        Schema::create('perans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('film_id')->constrained()->cascadeOnDelete();
            $table->foreignId('cast_id')->constrained()->cascadeOnDelete();
            $table->string('nama', 45);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perans');
    }
};
