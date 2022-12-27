<?php

namespace App\Http\Controllers\Locatario;
use App\Models\AluguelFilmeModel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class meusFilmes extends Controller
{
    public function listarmeusfilmes(){
        $alugueis = DB::table('tbalugueis')
        ->join('tbfilmes', 'tbalugueis.id_filme', '=', 'tbfilmes.id_filme',)
        ->select('tbalugueis.id_filme', 'tbfilmes.titulo_filme')
        ->get();
        return view('meus_filmes', compact('alugueis'));
    }
}
