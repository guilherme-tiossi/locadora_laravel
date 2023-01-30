<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\tbgenerosModel;
use Illuminate\Support\Facades\Hash;

class generosSeeder extends Seeder
{
    public function run(){
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
}
