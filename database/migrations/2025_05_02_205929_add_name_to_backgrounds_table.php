<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('backgrounds', function (Blueprint $table) {
            $table->string('name')->after('id'); // O según donde quieras que aparezca el campo
        });
    }

    public function down()
    {
        Schema::table('backgrounds', function (Blueprint $table) {
            $table->dropColumn('name');
        });
    }

};
