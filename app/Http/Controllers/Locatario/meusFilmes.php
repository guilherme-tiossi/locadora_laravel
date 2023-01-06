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
        $alugueis = DB::table('tbalugueis')
        ->join('tbfilmes', 'tbalugueis.id_filme', '=', 'tbfilmes.id_filme')
        ->select('tbalugueis.id_filme', 'tbfilmes.titulo_filme', 'tbalugueis.validade_aluguel')
        ->where('tbalugueis.id_user', '=', $user_id)
        ->get();
        $data = date("Y-m-d");
        foreach($alugueis as $f){
            $validade = $f->validade_aluguel;
            //dd($data . " > " . $validade);

            if ($data > $validade){
                $disponiveis_filme = DB::table('tbfilmes')->where('id_filme', '=', '1')->value('disponiveis_filme');
                $user_id = Auth::user()->id;
                ++$disponiveis_filme;
                DB::table('tbalugueis')
                ->where([
                    ['id_filme', '=', $f->id_filme],
                    ['id_user', '=', $user_id],
                ])
                ->delete();
                DB::table('tbfilmes')
                ->where('id_filme', $f->id_filme)
                ->update(['disponiveis_filme' => $disponiveis_filme]);
            }
        }

        return view('meus_filmes', compact('alugueis'));
    }
}
