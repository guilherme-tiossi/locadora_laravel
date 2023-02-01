<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Models\tbgenerosModel;
use App\Models\tbfilmesModel;
use Illuminate\Support\Facades\DB;

class AdminCrudController extends Controller
{
    public function index()
    {
        $generos = tbgenerosModel::all();

        $filmes = DB::table('tbfilmes')
        ->join('tbgeneros', 'tbfilmes.genero_filme', '=', 'tbgeneros.id_genero')
        ->select('tbfilmes.id_filme', 'tbfilmes.titulo_filme', 'tbfilmes.id_filme', 'tbfilmes.genero_filme', 'tbfilmes.link_filme', 'tbfilmes.disponiveis_filme', 'tbfilmes.valor_filme', 'tbfilmes.sinopse_filme', 'tbgeneros.nome_genero')
        ->get();
        return view('/crud_adm', compact('generos', 'filmes'));
    }
}