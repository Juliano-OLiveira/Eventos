<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAtividadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atividades', function (Blueprint $table) {
         $table->bigIncrements('id');
         $table->string('titulo')->nullable();
         $table->date('dataAtividade');
         $table->time('horaInico');
         $table->time('horaFinal');
         $table->text('descricao');

         $table->unsignedBigInteger('eventoId');

         $table->foreign('eventoId')->references('id')->on('eventos');
        
         $table->timestamps();
     });
    }

    /**
     * Reverse the migrations.
     *     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('atividades');
    }
}
