<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNomTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id('id');
            
            $table->string('nameevent',20);
            $table->string('ville');
            $table->string('pays');
            $table->integer('telResponsable');
            $table->date('dateDebutEvent');
            $table->date('dateFinEvent');
            $table->time('timeevent');
            $table->unsignedBigInteger('activity_id');
            $table->foreign('activity_id')
                ->references('id')
                ->on('activities')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->timestamps();
            
        });
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
