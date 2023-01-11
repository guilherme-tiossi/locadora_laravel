<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\financeiroModel;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('financeiro', function (Blueprint $table) {
            $table->id('id');
            $table->date('periodo');
            $table->decimal('receita_filmes')->length(5,2);
            $table->decimal('despesas')->length(5,2);
            $table->decimal('receita_total')->length(5,2);
        });

    $data = array(
        [
            'periodo' => '2022-10-31',
            'receita_filmes' => 17.236,
            'despesas' => 09.236,
            'receita_total' => 08.000,
        ],
        [
            'periodo' => '2022-11-30',
            'receita_filmes' => 16.470,
            'despesas' => 9.436,
            'receita_total' => 07.034,
        ],
        [
            'periodo' => '2022-12-31',
            'receita_filmes' => 20.190,
            'despesas' => 10.026,
            'receita_total' => 10.164,
        ],
    );
    foreach ($data as $d){
        $tbfinanceiro = new financeiroModel();
        $tbfinanceiro->periodo =$d['periodo'];
        $tbfinanceiro->receita_filmes =$d['receita_filmes'];
        $tbfinanceiro->despesas =$d['despesas'];
        $tbfinanceiro->receita_total =$d['receita_total'];
        $tbfinanceiro->save();
    }
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('financeiro');
    }
};
