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
        Schema::create('fixtures', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->string('juega');
            $table->string('nombre_club_1');
            $table->string('nombre_club_2');
            $table->unsignedBigInteger('temporadas_id');
            $table->unsignedBigInteger('fechas_id');
            $table->unsignedBigInteger('status_id');
            $table->timestamps();
            //relaciones
            $table->foreign('temporadas_id')->references('id')->on('temporadas')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('fechas_id')->references('id')->on('fechas')
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
        Schema::dropIfExists('fixtures');
    }
};
