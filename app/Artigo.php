<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artigo extends Model
{
    protected $fillable = [
        'titulo',
        'conteudo',
        'published_at'
    ];

    protected $guarded = ['id'];
}
