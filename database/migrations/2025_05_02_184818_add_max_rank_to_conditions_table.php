<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMaxRankToConditionsTable extends Migration
{
    public function up()
    {
        Schema::table('conditions', function (Blueprint $table) {
            // Añadir la columna max_rank
            $table->integer('max_rank')->nullable()->after('type'); // Después de 'type' o el lugar que prefieras
        });
    }

    public function down()
    {
        Schema::table('conditions', function (Blueprint $table) {
            // Eliminar la columna max_rank si retrocedemos la migración
            $table->dropColumn('max_rank');
        });
    }
}
