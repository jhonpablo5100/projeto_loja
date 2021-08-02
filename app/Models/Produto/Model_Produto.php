<?php

namespace App\Models\Produto;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Model_Produto extends Model
{
    use HasFactory;
    protected $fillable =['codigo_produto','categoria_produto',
    'nome_produto','preco_produto',
    'composicao_produto','data',
    'tamanho','quantidade_produto'
];
    
}
