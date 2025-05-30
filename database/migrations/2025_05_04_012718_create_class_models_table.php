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
        Schema::create('class_models', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('hit_dice')->nullable();
            $table->string('chakra_dice')->nullable();
            $table->string('proficiencies')->nullable();
            $table->string('equipment')->nullable();
            $table->string('ninjutsu')->nullable();
            $table->string('genjutsu')->nullable();
            $table->string('taijutsu')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('class_models');
    }
};
