<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\tbgenerosModel;


return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbgeneros', function (Blueprint $table) {
            $table->id('id_genero');
            $table->string('nome_genero');
        });

        $data =  array(
            [
                'nome_genero' => 'Drama',
            ],
            [
                'nome_genero' => 'Crime',
            ],
            [
                'nome_genero' => 'Guerra',
            ],
            [
                'nome_genero' => 'Suspense',
            ],
            [
                'nome_genero' => 'Ação'
            ]
        );

        foreach ($data as $d){
            $tbgeneros = new tbgenerosModel();
            $tbgeneros->nome_genero =$d['nome_genero'];
            $tbgeneros->save();
        }
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbgeneros');
    }
};
