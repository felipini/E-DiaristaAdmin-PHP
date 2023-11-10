<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imovel extends Model
{
    use HasFactory;

    protected $fillable = [
        'outorgado',
        'outorgante',
        'livro',
        'folha',
        'data_venda',
        'localizacao',
        'matricula',
        'descricao',
        'tipo_id'
    ];
}
