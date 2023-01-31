<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\funcionariosModel;

class funcionariosSeeder extends Seeder
{
    public function run(){
        $data = array(
            [
                'nome' => 'Carlos',
                'sobrenome' => 'Alberto',
                'cargo' => 'Desenvolvedor Full-Stack',
                'salario' => 3500,
                'cpf' => '123.456.789-10',
                'rg' => '12 345 678-9',
            ],
            [
                'nome' => 'Julia',
                'sobrenome' => 'Pereira',
                'cargo' => 'Recursos Humanos',
                'salario' => 2500,
                'cpf' => '234.567.891-01',
                'rg' => '23 456 789-1',
            ],
            [
                'nome' => 'Ricardo',
                'sobrenome' => 'Rotther',
                'cargo' => 'Financeiro',
                'salario' => 3000,
                'cpf' => '345.678.910-11',
                'rg' => '34 567 891-0',
            ],
        );
        foreach ($data as $d){
            $tbfuncionarios = new funcionariosModel();
            $tbfuncionarios->nome =$d['nome'];
            $tbfuncionarios->sobrenome =$d['sobrenome'];
            $tbfuncionarios->cargo =$d['cargo'];
            $tbfuncionarios->salario =$d['salario'];
            $tbfuncionarios->cpf =$d['cpf'];
            $tbfuncionarios->rg = $d['rg'];
            $tbfuncionarios->save();
        }
    }
}
