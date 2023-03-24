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
    Schema::create('categories', function (Blueprint $table) {
      $table->smallIncrements('id')->comment('Identificador de la tabla de categories');

      //Llaves foráneas
      $table->smallInteger('category_id')->unsigned()->nullable();
      $table->foreign('category_id')->references('id')->on('categories')->onDelete('restrict');

      //
      $table->string('name')->comment('Nombre de la categoría');
      $table->string('description')->nullable()->comment('Descripción de la categoría');
      $table->float('print_order')->comment('Orden de impresión');

      $table->boolean('is_visible')->default(1)->comment('Muestra si la categoría es visible en el POS con sus productos');

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
    Schema::dropIfExists('categories');
  }
};
