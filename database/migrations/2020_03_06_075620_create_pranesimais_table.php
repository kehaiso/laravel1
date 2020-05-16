<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePranesimaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pranesimais', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('uid'); // prisijungusio vartotojo id iš users lentelės
            $table->string('pavadinimas'); // pranešimo pavadinimas
            $table->text('tekstas')->nullable(true); // pranešimo tekstas, gali būti tuščias
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
        Schema::dropIfExists('pranesimais');
    }
}
