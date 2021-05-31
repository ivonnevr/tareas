<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTareasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tareas', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->text('descripcion');
            $table->smallInteger('prioridad')->default(1);
            $table->string('tipo');
            $table->date('fecha_limite');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations. Método down es como un ctrl+z
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tareas');
    }
}
