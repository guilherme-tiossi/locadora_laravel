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
        ->select('tbalugueis.id_filme', 'tbfilmes.titulo_filme')
        ->where('tbalugueis.id_user', '=', $user_id)
        ->get();
        return view('meus_filmes', compact('alugueis'));
    }
}
