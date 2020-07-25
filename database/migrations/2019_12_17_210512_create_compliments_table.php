<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComplimentsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('compliments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('evidencia');
            $table->date('fecha');
            $table->biginteger('commitment_id')->unsigned();
            $table->foreign('commitment_id')->references('id')->on('commitments')->onDelete('cascade');
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
        Schema::dropIfExists('compliments');
    }
}
