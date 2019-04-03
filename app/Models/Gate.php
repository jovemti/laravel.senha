<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gate extends Model
{
    // Propriedade necessária apenas se o nome da tabela não corresponder a correta pluralização feita pelo Larevel
    protected $table = 'gates';

    protected $fillable = [
        'portao',
        'placa',
        'nfe',
        'senha',
    ];
}
