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
