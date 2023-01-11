<?php

namespace App\Http\Controllers;
use App\Models\AluguelFilmeModel;
use App\Models\financeiroModel;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class financeiroController extends Controller
{
    public function index(){
        $alugueis_totais = DB::table('tbalugueis')
        ->select('tbalugueis.validade_aluguel', 'tbalugueis.valor_filme')
        ->get();
        $lucros_totais = 0;
        foreach ($alugueis_totais as $lt){
            $lucros_totais = $lucros_totais + $lt->valor_filme;
        }
        return view('dashboard_adm', compact('alugueis_totais', 'lucros_totais'));
    }
}
