<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UsersHasPermisosTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'users_has_permisos';

    /**
     * Run the migrations.
     * @table users_has_permisos
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('users_id');
            $table->unsignedBigInteger('permisos_id');
            $table->boolean('leer');
            $table->boolean('crear');
            $table->boolean('editar');
            $table->boolean('borrar');
            $table->boolean('especial');
            $table->timestamps();

            $table->foreign('users_id')
                ->references('id')->on('users')
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');

            $table->foreign('permisos_id')
                ->references('id')->on('permisos')
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tableName);
    }
}
