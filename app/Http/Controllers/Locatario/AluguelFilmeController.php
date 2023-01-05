<?php

namespace App\Http\Controllers\Locatario;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AluguelFilmeModel;
use Illuminate\Support\Facades\Auth;
use App\Model\tbfilmesModel;
use Illuminate\Support\Facades\DB;


class AluguelFilmeController extends Controller
{
    public function alugar(Request $request)
    {
        $filme_alugado = new AluguelFilmeModel;
        $user_id = Auth::user()->id;
        $disponiveis_filme = DB::table('tbfilmes')->where('id_filme', '=', '1')->value('disponiveis_filme');
        --$disponiveis_filme;
        $filme_alugado->id_filme = $request->filme;
        $filme_alugado->id_user = $user_id;
        $filme_alugado->validade_aluguel = $request->data;
        $filme_alugado->save();
        DB::table('tbfilmes')
        ->where('id_filme', $request->filme)
        ->update(['disponiveis_filme' => $disponiveis_filme]);
        return redirect('meus_filmes');
    }
    public function devolver(Request $request)
    {   
        $disponiveis_filme = DB::table('tbfilmes')->where('id_filme', '=', '1')->value('disponiveis_filme');
        $user_id = Auth::user()->id;
        ++$disponiveis_filme;
        DB::table('tbalugueis')
        ->where([
            ['id_filme', '=', $request->filme],
            ['id_user', '=', $user_id],
        ])
        ->delete();
        DB::table('tbfilmes')
        ->where('id_filme', $request->filme)
        ->update(['disponiveis_filme' => $disponiveis_filme]);
        return redirect('meus_filmes');
    }
}