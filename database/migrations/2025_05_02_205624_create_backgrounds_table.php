<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBackgroundsTable extends Migration
{
    public function up()
    {
        Schema::create('backgrounds', function (Blueprint $table) {
            $table->id(); // ID
            $table->string('skill_proficiencies'); // Skill Proficiencies
            $table->string('tool_proficiencies'); // Tool Proficiencies
            $table->string('equipment'); // Equipment
            $table->string('equipment_pack'); // Equipment Pack
            $table->text('feature'); // Feature
            $table->text('selection'); // Selection
            $table->timestamps(); // Created and updated timestamps
        });
    }

    public function down()
    {
        Schema::dropIfExists('backgrounds');
    }
}
