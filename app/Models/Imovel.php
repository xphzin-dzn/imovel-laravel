<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imovel extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome_imobiliaria',
        'endereco',
        'preco',
        'tipo_negocio',
    ];
    public $primaryKey = 'codigo';
    protected $table = 'imoveis';
    public $incrementing = true;
    public $timestamps = false;

}
