<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('exams', function (Blueprint $table) {
            $table->id();
            $table->enum('exposicion',['1', '5']);
            $table->enum('ocurrencia',['1', '3', '5']);
            $table->enum('personas',['1', '2', '3', '4', '5']);
            $table->enum('consecuencia_persona',['1', '3', '5']);
            $table->enum('consecuencia_salud',['1', '3', '5']);
            $table->enum('consecuencia_infraestructura',['0', '1', '2', '3']);
            $table->biginteger('danger_id');
            $table->biginteger('evaluation_id');
            $table->biginteger('array_id');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('exams');
    }
}
