<?php

namespace App\Http\Controllers\Locatario;
use App\Models\tbalugueisModel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class meusFilmes extends Controller
{
    public function listarmeusfilmes(){
        $filmes = tbalugueisModel($table)
        ->select('id_filme')
        ->join('tbfilmes', 'tbfilmes.id_filme', '=', 'tbalugueis.id_filme')
        ->where('tbfilmes.titulo_filme', $country)
        ->get();
        return view('meus_filmes', compact('filmes'));
    }
}
