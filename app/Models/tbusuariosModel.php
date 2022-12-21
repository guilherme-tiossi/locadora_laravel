<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbusuariosModel extends Model
{
    use HasFactory;

    protected $table = "tbusuarios";

    public $timestamps = false;
    protected $fillable = ['nome_user', 'email_user', 'senha_user', 'data_nasc_user', 'pfp_user'];
}
