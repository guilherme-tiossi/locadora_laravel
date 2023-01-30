<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\tbfilmesModel;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbfilmes', function (Blueprint $table) {
            $table->id('id_filme');
            $table->string('titulo_filme')->length(100);
            $table->string('sinopse_filme')->length(500);
            $table->float('valor_filme')->length(4,2);
            $table->integer('disponiveis_filme')->length(3);
            $table->string('foto_filme')->length(100)->default('padrao.png');
            $table->unsignedBigInteger('genero_filme');
            $table->foreign('genero_filme')
            ->references('id_genero')->on('tbgeneros')->onDelete('cascade');
    });
    }
    /**

     * 
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbfilmes');
    }
};
