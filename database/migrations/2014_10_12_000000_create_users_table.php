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
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_completo');
            $table->string('cif',15)->unique();
            $table->string('telefono', 15)->nullable();
            $table->date('fecha_nacimiento')->nullable();
            $table->binary('avatar')->nullable();
            $table->double('credito')->default(0)->nullable();
            $table->text('tipo_rol')->nullable();
            $table->string('cargo');
            $table->string('ubicacion')->comment('para determinar si es remoto o en oficia');
            $table->integer('jornada_horas');
            $table->integer('cod_empleado')->unique();
            $table->longText('password')->nullable();
            $table->boolean('bloqueado')->default(0)->comment('1 si bloqueado, 0 no, activo');
            $table->string('ultima_ip')->nullable();
            $table->integer('session_id')->nullable();
            $table->string('email',191)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
