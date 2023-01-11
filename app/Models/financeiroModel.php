<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class financeiroModel extends Model
{
    use HasFactory;

    protected $table = 'financeiro';
    public $timestamps = false;
    protected $fillable = ['periodo', 'receita_filmes', 'despesas', 'receita_total'];
}
