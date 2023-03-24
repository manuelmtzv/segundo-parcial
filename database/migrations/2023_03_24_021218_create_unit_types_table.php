<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('unit_types', function (Blueprint $table) {
      $table->smallIncrements('id')->comment('Identificador de la tabla de unit_types');
      $table->string('name')->comment('Nombre del tipo de unidad');
      $table->string('description')->nullable()->comment('Descripción del tipo de unidad');

      //Datos de creación y modificación
      $table->string('notes', 1024)->nullable()->comment('Notas');
      $table->boolean('is_active')->default(1)->comment('Muestra si la fila está activa');
      $table->timestamp('created_at', 0)->useCurrent()->comment('Fecha de creación');
      $table->timestamp('updated_at', 0)->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'))->comment('Última fecha de modificación');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('unit_types');
  }
};
