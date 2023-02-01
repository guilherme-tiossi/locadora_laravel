<?php

namespace App\Http\Controllers\Locatario;
use App\Models\AluguelFilmeModel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class meusFilmes extends Controller
{
    public function listarmeusfilmes(){
        $user_id = Auth::user()->id;
        $verificacao_devolvido = DB::table('tbalugueis')
        ->join('tbfilmes', 'tbalugueis.id_filme', '=', 'tbfilmes.id_filme')
        ->select('tbalugueis.id_filme', 'tbalugueis.validade_aluguel')
        ->where('tbalugueis.id_user', '=', $user_id)->where('tbalugueis.devolvido', '=', '0')
        ->get();
        $data = date("Y-m-d");
        foreach($verificacao_devolvido as $f){
            $validade = $f->validade_aluguel;
            if ($data > $validade){
                $disponiveis_filme = DB::table('tbfilmes')->where('id_filme', '=', '1')->value('disponiveis_filme');
                $user_id = Auth::user()->id;
                ++$disponiveis_filme;
                DB::table('tbalugueis')
                ->where([
                    ['id_filme', '=', $f->id_filme],
                    ['id_user', '=', $user_id],
                ])
                ->update(['devolvido' => true]);
                DB::table('tbfilmes')
                ->where('id_filme', $f->id_filme)
                ->update(['disponiveis_filme' => $disponiveis_filme]);
            }
        }
        $alugueis = DB::table('tbalugueis')
        ->join('tbfilmes', 'tbalugueis.id_filme', '=', 'tbfilmes.id_filme')
        ->join('tbgeneros', 'tbfilmes.genero_filme', '=', 'tbgeneros.id_genero')
        ->select('tbalugueis.id_filme', 'tbfilmes.titulo_filme', 'tbfilmes.sinopse_filme', 'tbfilmes.link_filme', 'tbgeneros.nome_genero', 'tbalugueis.validade_aluguel')
        ->where('tbalugueis.id_user', '=', $user_id)->where('tbalugueis.devolvido', '=', '0')
        ->get();
        return view('meus_filmes', compact('alugueis'));
    }
}
