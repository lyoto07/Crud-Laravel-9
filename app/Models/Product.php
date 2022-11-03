<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    const CREATED_AT = '';
    const UPDATED_AT = '';

    protected $table = "produto";
    protected $primaryKey = "idproduto";
    protected $keyType = 'integer';
    public $timestamps = false;    

    protected $fillable = [
        'idproduto',
        'codigo',
        'nome',
        'descricao', 
        'price', 
        'quantidade',
        'ativo',
        'foto'
    ];
}