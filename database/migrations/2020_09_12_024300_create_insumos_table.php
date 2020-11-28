<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInsumosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('insumos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->date('fecha_de_compra');
            $table->integer('cantidad');
            $table->string('marca')->nullable();
            $table->date('fecha_de_vencimiento');
            $table->string('presentacion')->nullable();
            $table->string('lote')->nullable();
            $table->timestamps();
            // $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('insumos');
    }
}
