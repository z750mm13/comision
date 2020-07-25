<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('reviews', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('valor');
            $table->text('descripcion')->nullable();
            $table->string('evidencia')->default('img/docs/no_file.png');
            $table->biginteger('validity_id')->unsigned();
            $table->biginteger('question_id')->unsigned();
            $table->biginteger('target_id')->unsigned();
            $table->foreign('validity_id')->references('id')->on('validities')->onDelete('cascade');
            $table->foreign('question_id')->references('id')->on('questions')->onDelete('cascade');
            $table->foreign('target_id')->references('id')->on('targets')->onDelete('cascade');
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
        Schema::dropIfExists('reviews');
    }
}
