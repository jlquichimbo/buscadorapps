<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertKeywords extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        /* Keywords: 7 elementos divididos por comas
            Institución, tipo de documento, tipo de documento informal, nombre proyecto , nombre componente, titulación, periodo. 
         */
        //Insert institucion
        DB::table('keywords')->insert([
            ['nombre' => 'Institucion'],
        ]);
        //Insert tipo de documento
        DB::table('keywords')->insert([
            ['nombre' => 'Tipo documento'],
        ]);
        //Insert tipo de documento informal
        DB::table('keywords')->insert([
            ['nombre' => 'Tipo documento informal'],
        ]);
        //Insert nombre proyecto
        DB::table('keywords')->insert([
            ['nombre' => 'Proyecto'],
        ]);
        //Insert nombre componente
        DB::table('keywords')->insert([
            ['nombre' => 'Componente'],
        ]);
        //Insert titulación
        DB::table('keywords')->insert([
            ['nombre' => 'Titulacion'],
        ]);
        //Insert periodo
        DB::table('keywords')->insert([
            ['nombre' => 'Periodo'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        //
    }

}
