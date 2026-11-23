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
        Schema::create('pokemons', function (Blueprint $table) {
            $table->id();
            $table->string('name', 64)->unique();
            $table->unsignedBigInteger('previous_id')->nullable();
            $table->unsignedBigInteger('next_id')->nullable();
            $table->timestamps();

            $table->foreign('previous_id')->on('pokemons')->references('id');
            $table->foreign('next_id')->on('pokemons')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pokemons');
    }
};
