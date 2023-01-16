<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\funcionariosModel;
use Illuminate\Support\Facades\DB;

class funcionariosController extends Controller
{
    public function index(){
        $funcionarios = funcionariosModel::all();
        return view("empregados_adm", compact("funcionarios"));
    }

    public function store(Request $request)
    {
        $funcionario = funcionariosModel::create([
            'nome' => $request->nome_funcionario,
            'sobrenome' => $request->sobrenome_funcionario,
            'cargo' => $request->cargo_funcionario,
            'salario' => $request->salario_funcionario,
            'cpf' => $request->rg_funcionario,
            'rg' => $request->cpf_funcionario,
        ]);

        return redirect('/empregados_adm');
    }

    public function update(Request $request)
    {
        funcionariosModel::where('id', '=', $request->id)->update([
            'nome' => $request->nome,
            'sobrenome' => $request->sobrenome,
            'cargo' => $request->cargo,
            'salario' => $request->salario,
            'cpf' => $request->rg,
            'rg' => $request->cpf,
        ]);

        return redirect('/empregados_adm');
    }

    public function delete(Request $request)
    {
        funcionariosModel::where('id', '=', $request->id)->delete();

        return redirect('/empregados_adm');
    }
}