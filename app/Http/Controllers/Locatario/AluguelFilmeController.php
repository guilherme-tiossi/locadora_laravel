<?php

namespace App\Http\Controllers\Locatario;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AluguelFilmeModel;
use Illuminate\Support\Facades\Auth;

class AluguelFilmeController extends Controller
{
    public function alugar(Request $request)
    {
        $filme_alugado = new ALuguelFilmeModel;
        $user_id = Auth::user()->id;
        $filme_alugado->id_filme = $request->filme;
        $filme_alugado->id_user = $user_id;
        $filme_alugado->validade_aluguel = $request->data;
        $filme_alugado->save();
        return redirect('dashboard');
    }
}