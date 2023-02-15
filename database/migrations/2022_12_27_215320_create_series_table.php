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
        Schema::create('series', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->unsignedBigInteger('tipo_serie_id');
            $table->unsignedBigInteger('club_id');
            $table->timestamps();

            //relaciones
            $table->foreign('tipo_serie_id')->references('id')->on('series')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('club_id')->references('id')->on('clubes')
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
        Schema::dropIfExists('series');
    }
};
