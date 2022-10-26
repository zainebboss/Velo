<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVelosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('velos', function (Blueprint $table) {
            $table->id();
            $table->string('marque');
            $table->string('model');
            $table->string('type');
            $table->string('prixJ');
            $table->boolean('dispo')->default(0);
            $table->string('image')->default("https://fglprdwebsitewebapp.azureedge.net/media/3179ba83-b877-4a35-9efa-1b20c8367163/NTW4uw/ARCHIVES%202021/2021-WK14/Blog/210404-14-se-blogue-type%20velo1.jpg");
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
        Schema::dropIfExists('velos');
    }
}