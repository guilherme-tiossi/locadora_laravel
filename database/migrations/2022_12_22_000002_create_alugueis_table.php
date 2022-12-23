<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbalugueis', function (Blueprint $table) {
            $table->id('id_aluguel');
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_filme');
            $table->date('validade_aluguel');
            $table->foreign('id_user')
            ->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_filme')
            ->references('id_filme')->on('tbfilmes')->onDelete('cascade');
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
        Schema::dropIfExists('tbalugueis');
    }
};
