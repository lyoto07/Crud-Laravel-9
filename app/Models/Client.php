<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    const CREATED_AT = '';
    const UPDATED_AT = '';

    protected $table = "cliente";
    protected $primaryKey = 'idcliente';
    public $timestamps = false;    

    protected $fillable = [
        'idcliente',
        'cpf',
        'name',
        'phone',
        'endereco',
        'cep',
        'cidade',
        'bairro',
        'estado',
        'fk_cliente_venda'
    ];
}