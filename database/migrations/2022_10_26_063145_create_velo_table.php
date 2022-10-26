<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVeloTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Velos', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('libelle');
            $table->string('etat');
            $table->integer('prix');
            $table->unsignedBigInteger('categorie_id');
            $table->foreign('categorie_id')
            ->references('id')
            ->on('categories')
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
        Schema::dropIfExists('Velos');
    }
}
