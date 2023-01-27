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

        $jan = 0; $jan = 0; $jan = 0; $fev = 0; $mar = 0; $abr = 0; $mai = 0; $jun = 0; $jul = 0; $ago = 0; $set = 0; $out = 0; $nov = 0; $dez = 0; 
        $ano = $request->ano;
        if ($ano == null){
            $lucros_totais = 0;
            $ano = "Todos";
            foreach ($alugueis_totais as $lt){
                switch ($lt->validade_aluguel){
                   case(str_contains($lt->validade_aluguel, '-01-')):
                       $jan = $jan + $lt->valor_filme;
                       $lucros_totais = $lucros_totais + $lt->valor_filme;
                   break;
                   case(str_contains($lt->validade_aluguel, '-02-')):
                       $fev = $fev + $lt->valor_filme;
                       $lucros_totais = $lucros_totais + $lt->valor_filme;
                     break;
                   case(str_contains($lt->validade_aluguel, '-03-')):
                       $mar = $mar + $lt->valor_filme;
                       $lucros_totais = $lucros_totais + $lt->valor_filme;
                    break;
                   case(str_contains($lt->validade_aluguel, '-04-')):
                       $abr = $abr + $lt->valor_filme;
                       $lucros_totais = $lucros_totais + $lt->valor_filme;
                   break;
                   case(str_contains($lt->validade_aluguel, '-05-')):
                       $mai = $mai + $lt->valor_filme;
                       $lucros_totais = $lucros_totais + $lt->valor_filme;
                    break;
                   case(str_contains($lt->validade_aluguel, '-06-')):
                       $jun = $jun + $lt->valor_filme;
                       $lucros_totais = $lucros_totais + $lt->valor_filme;
                    break;
                   case(str_contains($lt->validade_aluguel, '-07-')):
                       $jul = $jul + $lt->valor_filme;
                       $lucros_totais = $lucros_totais + $lt->valor_filme;
                    break;
                   case(str_contains($lt->validade_aluguel, '-08-')):
                       $ago = $ago + $lt->valor_filme;
                       $lucros_totais = $lucros_totais + $lt->valor_filme;
                    break;
                   case(str_contains($lt->validade_aluguel, '-09-')):
                       $set = $set + $lt->valor_filme;
                       $lucros_totais = $lucros_totais + $lt->valor_filme;
                    break;
                   case(str_contains($lt->validade_aluguel, '-10-')):
                       $out = $out + $lt->valor_filme;
                       $lucros_totais = $lucros_totais + $lt->valor_filme;
                    break;
                   case(str_contains($lt->validade_aluguel, '-11-')):
                       $nov = $nov + $lt->valor_filme;
                       $lucros_totais = $lucros_totais + $lt->valor_filme;
                    break;
                   case(str_contains($lt->validade_aluguel, '-12-')):
                       $dez = $dez + $lt->valor_filme;
                       $lucros_totais = $lucros_totais + $lt->valor_filme;
                    break;
                }
        }
        }
        else{   
            $lucros_totais = 0;
        foreach ($alugueis_totais as $lt){
            switch ($lt->validade_aluguel){
               case(str_contains($lt->validade_aluguel, $ano. '-01')):
                   $jan = $jan + $lt->valor_filme;
                   $lucros_totais = $lucros_totais + $lt->valor_filme;
                break;
               case(str_contains($lt->validade_aluguel, $ano. '-02')):
                   $fev = $fev + $lt->valor_filme;
                   $lucros_totais = $lucros_totais + $lt->valor_filme;
                break;
               case(str_contains($lt->validade_aluguel, $ano. '-03')):
                   $mar = $mar + $lt->valor_filme;
                   $lucros_totais = $lucros_totais + $lt->valor_filme;
                break;
               case(str_contains($lt->validade_aluguel, $ano. '-04')):
                   $abr = $abr + $lt->valor_filme;
                   $lucros_totais = $lucros_totais + $lt->valor_filme;
                break;
               case(str_contains($lt->validade_aluguel, $ano. '-05')):
                   $mai = $mai + $lt->valor_filme;
                   $lucros_totais = $lucros_totais + $lt->valor_filme;
                break;
               case(str_contains($lt->validade_aluguel, $ano. '-06')):
                   $jun = $jun + $lt->valor_filme;
                   $lucros_totais = $lucros_totais + $lt->valor_filme;
                break;
               case(str_contains($lt->validade_aluguel, $ano. '-07')):
                   $jul = $jul + $lt->valor_filme;
                   $lucros_totais = $lucros_totais + $lt->valor_filme;
                break;
               case(str_contains($lt->validade_aluguel, $ano. '-08')):
                   $ago = $ago + $lt->valor_filme;
                   $lucros_totais = $lucros_totais + $lt->valor_filme;
                break;
               case(str_contains($lt->validade_aluguel, $ano. '-09')):
                   $set = $set + $lt->valor_filme;
                   $lucros_totais = $lucros_totais + $lt->valor_filme;
                break;
               case(str_contains($lt->validade_aluguel, $ano. '-10')):
                   $out = $out + $lt->valor_filme;
                   $lucros_totais = $lucros_totais + $lt->valor_filme;
                break;
               case(str_contains($lt->validade_aluguel, $ano. '-11')):
                   $nov = $nov + $lt->valor_filme;
                   $lucros_totais = $lucros_totais + $lt->valor_filme;
                break;
               case(str_contains($lt->validade_aluguel, $ano. '-12')):
                   $dez = $dez + $lt->valor_filme;
                   $lucros_totais = $lucros_totais + $lt->valor_filme;
                break;
            }
        }
        }
        $dados_financeiros = DB::table('financeiro')
        ->select()
        ->get();
        foreach ($dados_financeiros as $df){
            $df->periodo = mb_substr($df->periodo, 0, 7);
        }
        return view('dashboard_adm', compact('alugueis_totais', 'dados_financeiros', 'lucros_totais', 'ano', 'jan', 'fev', 'mar', 'abr', 'mai', 'jun', 'jul', 'ago', 'set', 'out', 'nov', 'dez'));
    }
}
