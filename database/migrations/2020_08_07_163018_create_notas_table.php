<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notas', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('documento')->unique();
            $table->string('nombre');
            $table->string('tipo_documento');
            $table->bigInteger('telefono')->nullable();
            $table->string('procedimiento')->nullable();
            $table->string('observaciones')->nullable();
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
        Schema::drop('notas');
    }
}
