<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\funcionariosModel;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->id('id');
            $table->string('nome');
            $table->string('sobrenome');
            $table->string('cargo');
            $table->boolean('CLT')->default(true);
            $table->float('salario');
            $table->string('cpf');
            $table->string('rg');
        });


        $data = array(
            [
                'nome' => 'Carlos',
                'sobrenome' => 'Alberto',
                'cargo' => 'Desenvolvedor Full-Stack',
                'CLT' => false,
                'salario' => 2.500,
                'cpf' => '123.456.789-10',
                'rg' => '12 345 678-9',
            ],
            [
                'nome' => 'Julia',
                'sobrenome' => 'Pereira',
                'cargo' => 'Recursos Humanos',
                'salario' => 2.000,
                'cpf' => '234.567.891-01',
                'rg' => '23 456 789-1',
            ],
            [
                'nome' => 'Ricardo',
                'sobrenome' => 'Rotther',
                'cargo' => 'Financeiro',
                'CLT' => false,
                'salario' => 2.500,
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

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('funcionarios');
    }
};
