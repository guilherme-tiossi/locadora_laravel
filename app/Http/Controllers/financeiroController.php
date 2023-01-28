<?php

namespace App\Http\Controllers;
use App\Models\AluguelFilmeModel;
use App\Models\financeiroModel;
use Illuminate\Support\Facades\DB;
use DateTime;
use Illuminate\Http\Request;

class financeiroController extends Controller
{
    public function index(Request $request){
        $alugueis_totais = DB::table('tbalugueis')
        ->select('tbalugueis.validade_aluguel', 'tbalugueis.valor_filme')
        ->get();

                $data_atual = date('Y-m-d');
                    $data_atual = str_replace('01-27', '02-28', $data_atual);
                $data = new DateTime($data_atual);
                $data->modify('last day of this month');
                $data = $data->format('Y-m-d');
                $periodo = mb_substr($data, 0, 8);
            $verifica_periodo = DB::table('financeiro')
                ->select('financeiro.periodo')
                ->where('financeiro.periodo', 'LIKE', '%'.$periodo.'%')
                ->get(); 
            $teste_periodo = null;
            foreach ($verifica_periodo as $vp){ $teste_periodo = $vp->periodo; }       
        if ($data_atual == $data and $teste_periodo == null){ //se hoje for o último dia do mês:
            $alugueis_mensais = DB::table('tbalugueis')
                ->select('tbalugueis.validade_aluguel', 'tbalugueis.valor_filme')
                ->where('tbalugueis.validade_aluguel', 'LIKE', '%'.$periodo.'%')
                ->get();
            $receita_filmes = 0;
            foreach ($alugueis_mensais as $am){
                $receita_filmes = $receita_filmes + $am->valor_filme / 1000;
            }

            $impostos = $receita_filmes%15;
            $salarios = DB::table('funcionarios')
            ->select('funcionarios.salario')
            ->get();
            $despesas = 0;
            foreach($salarios as $s){
                $despesas = $despesas + $s->salario;
            }
            $despesas = $despesas + $impostos;
            $receita_total = $receita_filmes - $despesas;
            
            $inserir_dados_financeiros = financeiroModel::create([
                'periodo' => $data,
                'receita_filmes' => $receita_filmes,
                'despesas' => $despesas,
                'receita_total' => $receita_total
            ]);
        }

        $meses = [$jan = 0, $fev = 0, $mar = 0, $abr = 0, $mai = 0, $jun = 0, $jul = 0, $ago = 0, $set = 0, $out = 0, $nov = 0, $dez = 0]; 
        $meses_str = ['jan','fev', 'mar', 'abr', 'mai', 'jun', 'jul', 'ago', 'set', 'out', 'nov', 'dez'];
        $meses_int = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];
        $i = -1;
        $lucros_totais = 0;
        $ano = $request->ano;
        if ($ano == null){
        while ($i < 11){
            $i++;
        foreach($alugueis_totais as $lt){
                if(str_contains($lt->validade_aluguel, '-0' . $meses_int[$i] . '-')){
                    $meses[$i] = $meses[$i] + $lt->valor_filme;
                    $lucros_totais = $lucros_totais + $lt->valor_filme;
                }
            
                if(str_contains($lt->validade_aluguel, '-' . $meses_int[$i] . '-')){
                    $meses[$i] = $meses[$i] + $lt->valor_filme;
                    $lucros_totais = $lucros_totais + $lt->valor_filme;
                }
        }}}
        
        else{
            while ($i < 11){
                $i++;
            foreach($alugueis_totais as $lt){
                    if(str_contains($lt->validade_aluguel, $ano . '-0' . $meses_int[$i] . '-')){
                        $meses[$i] = $meses[$i] + $lt->valor_filme;
                        $lucros_totais = $lucros_totais + $lt->valor_filme;
                    }
                
                    if(str_contains($lt->validade_aluguel, $ano . '-' . $meses_int[$i] . '-')){
                        $meses[$i] = $meses[$i] + $lt->valor_filme;
                        $lucros_totais = $lucros_totais + $lt->valor_filme;
                    } 
        }}}

        $dados_financeiros = DB::table('financeiro')
        ->select()
        ->get();
        foreach ($dados_financeiros as $df){
            $df->periodo = mb_substr($df->periodo, 0, 7);
        }
        return view('dashboard_adm', compact('alugueis_totais', 'meses', 'dados_financeiros', 'lucros_totais', 'ano'));
    }
}
