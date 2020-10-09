<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTargetsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('targets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ciclo')->nullable();
            $table->biginteger('subarea_id')->unsigned();
            $table->biginteger('questionnaire_id')->unsigned();
            $table->foreign('subarea_id')->references('id')->on('subareas')->onDelete('cascade');
            $table->foreign('questionnaire_id')->references('id')->on('questionnaires')->onDelete('cascade');
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
        Schema::dropIfExists('targets');
    }
}
