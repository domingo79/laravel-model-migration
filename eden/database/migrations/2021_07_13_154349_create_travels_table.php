<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travels', function (Blueprint $table) {
            $table->id();
            $table->string('titolo', 60);
            $table->string('localita', 150)->nullable();
            $table->string('partenza', 150)->nullable();
            $table->string('durata', 15)->nullable();
            $table->string('sistemazione', 100)->nullable();
            $table->string('trattamento', 150)->nullable();
            $table->integer('prezzo')->nullable();
            $table->text('poster')->nullable();
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
        Schema::dropIfExists('travels');
    }
}
