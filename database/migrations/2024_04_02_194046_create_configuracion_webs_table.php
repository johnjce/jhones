<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfiguracionWebsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'configuracion_webs';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->id();
            $table->string('url_logo');
            $table->string('color_primario', 15);
            $table->string('color_secundario', 15);
            $table->string('color_texto', 15);
            $table->string('color_titulos', 15);
            $table->longText('elementos_menu_lateral');
            $table->longText('elementos_menu_superior');
            $table->longText('elementos_footer');
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
        Schema::dropIfExists($this->tableName);
    }
}
