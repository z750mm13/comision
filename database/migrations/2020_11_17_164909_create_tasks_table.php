<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->boolean('programable');
            $table->string('descripcion');
            $table->date('inicio')->nullable();
            $table->date('fin')->nullable();
            $table->string('evidencia')->default('img/docs/no_file.png');
            $table->date('caducidad')->nullable();
            $table->boolean('cumplida')->default(false);
            $table->string('postdescripcion')->nullable();
            $table->biginteger('requirement_id');
            $table->biginteger('user_id')->nullable();
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
        Schema::dropIfExists('tasks');
    }
}
