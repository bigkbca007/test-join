<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddConstraintsToTbProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tb_produtos', function (Blueprint $table) {
            $table->unsignedBigInteger('id_categoria_produto');
            $table->foreign('id_categoria_produto')
                ->references('id_categoria_produto')->on('tb_categorias_produtos');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tb_produtos', function (Blueprint $table) {
            //
        });
    }
}
