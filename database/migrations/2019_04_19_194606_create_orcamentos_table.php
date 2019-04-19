<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrcamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orcamentos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer("cod_cliente")->unsigned();
            $table_>foreign("cod_cliente")->references("id")->on("clientes");

            $table->integer("cod_funcionario")->unsigned();
            $table->integer("cod_funcionario")->references("id")->on("funcionarios");
            
            $table->string("descricao");
            $table->float("valor");
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
        Schema::dropIfExists('orcamentos');
    }
}
