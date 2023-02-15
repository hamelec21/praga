<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resultados', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_club',45);
            $table->integer('resultado_local',);
            $table->integer('resultado_visita',);
            $table->unsignedBigInteger('club_id',);
            $table->unsignedBigInteger('fechas_id',);
            $table->unsignedBigInteger('temporadas_id',);
            $table->unsignedBigInteger('serie_id',);
            $table->unsignedBigInteger('status_id',);
            $table->timestamps();

            //relaciones
            $table->foreign('club_id')->references('id')->on('clubes')
                ->onDelete('restrict')
            ->onUpdate('restrict');

            $table->foreign('fechas_id')->references('id')->on('fechas')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('temporadas_id')->references('id')->on('temporadas')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('serie_id')->references('id')->on('series')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('status_id')->references('id')->on('status')
                ->onDelete('restrict')
                ->onUpdate('restrict');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resultados');
    }
};
