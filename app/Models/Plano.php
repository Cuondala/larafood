<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plano extends Model
{
    use HasFactory;

    protected $fillable =
        [
            'nomePlano',
            'url',
            'preco',
            'descricao',
        ];

    public function pesquisa($filtro=null){

        $resultado = $this->where('nomePlano', '=', $filtro)
            ->orWhere('preco', '=', $filtro)->latest()->paginate();

        return $resultado;
    }

    public function detalhe(){

        return $this->HasMany(Detalhe::class);
    }
}
