<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loja extends Model
{
    use HasFactory;

    protected $fillable = [
        'codeLoja',
        'nomeLoja',
        'enderecoLoja',
        'imgLoja',
        'whatsapp',
        'whatsapp2',
        'whatsapp3',
        'telefone',
        'email',
        'segmentacao',
        'segmentacao2',
        'estadoCode',
        'estado',
        'sigla',
        'latitude',
        'longitude',
        'cep'
    ];
}
