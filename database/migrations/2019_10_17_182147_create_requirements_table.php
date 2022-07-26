<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequirementsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('requirements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('numero', 150);
            $table->text('descripcion');
            $table->string('tipo');
            $table->enum('frecuencia',['Semanal', 'Mensual', 'Bimestral', 'Trimestral', 'Semestral', 'Anual'])->default('Semanal');
            $table->bigInteger('norm_id')->unsigned();
            $table->foreign('norm_id')->references('id')->on('norms')->onDelete('cascade');
            $table->unique(array('norm_id', 'numero'));
            $table->softDeletes();
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
        Schema::dropIfExists('requirements');
    }
}
