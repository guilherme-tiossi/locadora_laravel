<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class funcionariosModel extends Model
{
    use HasFactory;

    protected $table = "funcionarios";
    public $timestamps = false;
    protected $fillable = ['nome', 'sobrenome', 'cargo', 'salario', 'rg', 'cpf'];
}
