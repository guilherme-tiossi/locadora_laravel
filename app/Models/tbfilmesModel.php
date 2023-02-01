<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbfilmesModel extends Model
{
    use HasFactory;
    
    protected $table = "tbfilmes";
    public $timestamps = false;
    protected $fillable = ['titulo_filme', 'sinopse_filme', 'valor_filme', 'disponiveis_filme', 'genero_filme', 'link_filme'];
}
