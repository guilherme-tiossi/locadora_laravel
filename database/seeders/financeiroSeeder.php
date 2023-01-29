<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\financeiroModel;

class financeiroSeeder extends Seeder
{
    public function run(){
        $data = array(
            [
                'periodo' => '2022-01-31',
                'receita_filmes' => 1005,
                'despesas' => 15%1005,
                'receita_total' => 1005 - 15%1005,
            ],
            [
                'periodo' => '2022-02-28',
                'receita_filmes' => 3738,
                'despesas' => 15%3738 + 1200,
                'receita_total' => 3738 - 15%3738 - 1200,
            ],
            [
                'periodo' => '2022-03-31',
                'receita_filmes' => 4158,
                'despesas' => 15%4158 + 1200,
                'receita_total' => 3738 - 15%4158 - 1200,
            ],            [
                'periodo' => '2022-04-30',
                'receita_filmes' => 3738,
                'despesas' => 15%3738 + 1200,
                'receita_total' => 3738 - 15%3738 - 1200,
            ],
            [
                'periodo' => '2022-05-31',
                'receita_filmes' => 4158,
                'despesas' => 15%4158 + 1200,
                'receita_total' => 4158 - 15%4158 - 1200,
            ],
            [
                'periodo' => '2022-07-30',
                'receita_filmes' => 4158,
                'despesas' => 15%4158 + 1200,
                'receita_total' => 4158 - 15%4158 - 1200,
            ],            [
                'periodo' => '2022-08-31',
                'receita_filmes' => 3738,
                'despesas' => 15%3738 + 1200,
                'receita_total' => 3738 - 15%3738 - 1200,
            ],
            [
                'periodo' => '2022-09-30',
                'receita_filmes' => 4158,
                'despesas' => 15%4158 + 1200,
                'receita_total' => 4158 - 15%4158 - 1200,
            ],
            [
                'periodo' => '2022-10-31',
                'receita_filmes' => 3738,
                'despesas' => 15%3738 + 1200,
                'receita_total' => 3738 - 15%3738 - 1200,
            ],
            [
                'periodo' => '2022-11-30',
                'receita_filmes' => 4158,
                'despesas' => 15%4158 + 1200,
                'receita_total' => 4158 - 15%4158 - 1200,
            ],
            [
                'periodo' => '2022-12-31',
                'receita_filmes' => 3738,
                'despesas' => 15%4158 + 1200,
                'receita_total' => 3738 - 15%3738 - 1200
            ],
        );
        foreach ($data as $d){
            $tbfinanceiro = new financeiroModel();
            $tbfinanceiro->periodo =$d['periodo'];
            $tbfinanceiro->receita_filmes =$d['receita_filmes'];
            $tbfinanceiro->despesas =$d['despesas'];
            $tbfinanceiro->receita_total =$d['receita_total'];
            $tbfinanceiro->save();
        }
    }
}
