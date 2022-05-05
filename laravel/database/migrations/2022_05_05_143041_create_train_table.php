<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('train', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('azienda',100);
            $table->string('stazione_di_partenza' ,100);
            $table->string('stazione_di_arrivo',100);
            $table->time('orario_di_arrivo',0);
            $table->time('orario_di_partenza',0);
            $table->string('codice_treno',100);//non so se il treno ha anche lettere nel codice
            $table->tinyInteger('numero_carozze');//treno con più carrozze al mondo 22
            $table->boolean('in_orario');//presumo buleano si o no, 1 o 0
            $table->boolean('cancellato');//buleano si o no
            $table->string('scopo',100);//aggiunto, tipo trsporto merci o persone
            $table->date('data');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('train');
    }
}
