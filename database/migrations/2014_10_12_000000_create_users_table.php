<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->boolean('active')->default(false);
            $table->boolean('admin')->default(false);
            $table->string('nombre',150);
            $table->string('apellidos',150);
            $table->string('foto')->default('avatars/1/avatar-default.png');
            $table->enum('tipo',['Integrante', 'Apoyo'])->default('Integrante');
            $table->softDeletes();
            $table->rememberToken();
            $table->timestamps();
            $table->unique(array('nombre', 'apellidos'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
