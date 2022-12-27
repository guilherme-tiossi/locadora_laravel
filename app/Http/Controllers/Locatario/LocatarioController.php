<?php

namespace App\Http\Controllers\Locatario;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class locatarioController extends Controller
{
    public function index()
    {
        $filmes_alugados = [
            'Filme 1' => 'Genero x',
            'Filme 2' => 'Genero y',
            'Filme 3' => 'Genero x',
            'Filme 4' => 'Genero z',
        ];
        return view('locatario.filmesalugados', compact('filmes_alugados'));
    }
}