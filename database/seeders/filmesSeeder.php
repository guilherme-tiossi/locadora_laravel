<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\tbfilmesModel;
use Illuminate\Support\Facades\Hash;

class filmesSeeder extends Seeder
{
    public function run(){
        $data = array(
            [
                'titulo_filme' => 'Django Livre',
                'sinopse_filme' => 'No sul dos Estados Unidos, o ex-escravo Django faz uma aliança inesperada com o caçador de recompensas Schultz para caçar os criminosos mais procurados do país e resgatar sua esposa de um fazendeiro que força seus escravos a participar de competições mortais.',
                'valor_filme' => 15.00,
                'disponiveis_filme' => 10,
                'foto_filme' => 'padrao.png',
                'genero_filme' => 1,
            ],
            [
                'titulo_filme' => 'Kill Bill Vol. 1',
                'sinopse_filme' => 'Noiva assassina é traída por antigo grupo e fica em coma por quatro anos. Quando acorda, procura vingança e mata seus companheiros um por um. Ao confrontar seu antigo mestre e amante, uma surpresa a espera.',
                'valor_filme' => 30.00,
                'disponiveis_filme' => 5,
                'foto_filme' => 'padrao.png',
                'genero_filme' => 2,
            ],
            [
                'titulo_filme' => 'Bastardos Inglórios',
                'sinopse_filme' => 'Na Segunda Guerra Mundial, a França está ocupada pelos nazistas. O tenente Aldo Raine é o encarregado de reunir um pelotão de soldados de origem judaica, com o objetivo de realizar uma missão suicida contra os alemães. O objetivo é matar o maior número possível de nazistas, da forma mais cruel possível.',
                'valor_filme' => 10.00,
                'disponiveis_filme' => 15,
                'foto_filme' => 'padrao.png',
                'genero_filme' => 3,
            ],
            [
                'titulo_filme' => 'Team America: World Police',
                'sinopse_filme' => 'Quando o governante norte-coreano Kim Jong-il organiza uma conspiração terrorista global, cabe aos bonecos fortemente armados da unidade altamente especializada Team America parar seu esquema covarde.',
                'valor_filme' => 15.00,
                'disponiveis_filme' => 20,
                'foto_filme' => 'padrao.png',
                'genero_filme' => 4,
            ],
            [
                'titulo_filme' => 'Os Oito Odiados',
                'sinopse_filme' => 'Em busca de abrigo para se proteger de uma nevasca, dois caçadores de recompensas, um prisioneiro e um homem que alega ser xerife conhecem quatro estranhos.',
                'valor_filme' => 15.00,
                'disponiveis_filme' => 10,
                'foto_filme' => 'padrao.png',
                'genero_filme' => 5,
            ],

            [
                'titulo_filme' => 'Clube da Luta',
                'sinopse_filme' => 'Um homem deprimido que sofre de insônia conhece um estranho vendedor chamado Tyler Durden e se vê morando em uma casa suja depois que seu perfeito apartamento é destruído. A dupla forma um clube com regras rígidas onde homens lutam. A parceria perfeita é comprometida quando uma mulher, Marla, atrai a atenção de Tyler.',
                'valor_filme' => 30.00,
                'disponiveis_filme' => 6,
                'foto_filme' => 'padrao.png',
                'genero_filme' => 1,
            ],
        );
        foreach ($data as $d){
            $tbfilmes = new tbfilmesModel();
            $tbfilmes->titulo_filme =$d['titulo_filme'];
            $tbfilmes->sinopse_filme =$d['sinopse_filme'];
            $tbfilmes->valor_filme =$d['valor_filme'];
            $tbfilmes->disponiveis_filme =$d['disponiveis_filme'];
            $tbfilmes->foto_filme =$d['foto_filme'];
            $tbfilmes->genero_filme = $d['genero_filme'];
            $tbfilmes->save();
        }
    }
}
