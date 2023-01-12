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
        $jan = 0; $jan = 0; $jan = 0; $fev = 0; $mar = 0; $abr = 0; $mai = 0; $jun = 0; $jul = 0; $ago = 0; $set = 0; $out = 0; $nov = 0; $dez = 0; 
        $ano = 2023;
        foreach ($alugueis_totais as $lt){
            switch ($lt->validade_aluguel){
               case(str_contains($lt->validade_aluguel, $ano. '-01')):
                   $jan = $jan + $lt->valor_filme;
               break;
               case(str_contains($lt->validade_aluguel, $ano. '-02')):
                   $fev = $fev + $lt->valor_filme;
               break;
               case(str_contains($lt->validade_aluguel, $ano. '-03')):
                   $mar = $mar + $lt->valor_filme;
               break;
               case(str_contains($lt->validade_aluguel, $ano. '-04')):
                   $abr = $abr + $lt->valor_filme;
               break;
               case(str_contains($lt->validade_aluguel, $ano. '-05')):
                   $mai = $mai + $lt->valor_filme;
               break;
               case(str_contains($lt->validade_aluguel, $ano. '-06')):
                   $jun = $jun + $lt->valor_filme;
               break;
               case(str_contains($lt->validade_aluguel, $ano. '-07')):
                   $jul = $jul + $lt->valor_filme;
               break;
               case(str_contains($lt->validade_aluguel, $ano. '-08')):
                   $ago = $ago + $lt->valor_filme;
               break;
               case(str_contains($lt->validade_aluguel, $ano. '-09')):
                   $set = $set + $lt->valor_filme;
               break;
               case(str_contains($lt->validade_aluguel, $ano. '-10')):
                   $out = $out + $lt->valor_filme;
               break;
               case(str_contains($lt->validade_aluguel, $ano. '-11')):
                   $nov = $nov + $lt->valor_filme;
               break;
               case(str_contains($lt->validade_aluguel, $ano. '-12')):
                   $dez = $dez + $lt->valor_filme;
               break;
            }
            $lucros_totais = $lucros_totais + $lt->valor_filme;
        }
        return view('dashboard_adm', compact('alugueis_totais', 'lucros_totais', 'jan', 'fev', 'mar', 'abr', 'mai', 'jun', 'jul', 'ago', 'set', 'out', 'nov', 'dez'));
    }
}
