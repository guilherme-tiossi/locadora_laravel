<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AluguelFilmeModel extends Model
{
    use HasFactory;
    
    protected $table = "tbalugueis";
    public $timestamps = false;
    protected $fillable = ['id_user', 'id_filme', 'validade_aluguel', 'valor_filme'];
}
