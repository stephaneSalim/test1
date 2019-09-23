<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFicheDeSuivisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fiche_de_suivis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tension')->nullable();
            $table->decimal('temperature');
            $table->integer('poids')->nullable();
            $table->string('motif');
            $table->mediumText('symptomes');
            $table->mediumText('description')->nullable();
            $table->mediumText('antecedents')->nullable();
            $table->mediumText('diagnostic');
            $table->mediumText('prescription');
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
        Schema::dropIfExists('fiche_de_suivis');
    }
}
