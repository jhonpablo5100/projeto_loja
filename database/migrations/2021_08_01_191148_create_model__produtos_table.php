<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('model__produtos', function (Blueprint $table) {
            $table->id();
            $table->string("codigo_produto");
            $table->string("categoria_produto");
            $table->string("nome_produto");
            $table->double("preco_produto",8,2);
            $table->string("composicao_produto");
            $table->string("data");
            $table->string("tamanho");
            $table->integer("quantidade_produto");
            $table->string("foto_1");
            $table->string("foto_2");
            $table->string("foto_3");

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
        Schema::dropIfExists('model__produtos');
    }
}
