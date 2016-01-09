<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('resultados');

        Schema::create('resultados', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('busqueda_id')->unsigned();
            $table->foreign('busqueda_id')
                    ->references('id')->on('busquedas')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->string('result_id', 150);
            $table->enum('favorito', ['1', '0'])->default('0');

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
        Schema::drop('resultados');
    }
}
