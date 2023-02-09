<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalhe extends Model
{
    use HasFactory;

    protected $fillable = ['nomeDetalhe', 'descricao'];


    public function plano(){
        return $this->belongsTo(Plano::class);
    }
}
