<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    const CREATED_AT = '';
    const UPDATED_AT = '';

    protected $table = "venda";
    protected $primaryKey = 'id';
    protected $forenKey = 'clienteVenda';
    public $timestamps = false;    

    protected $fillable = [
        'nome',
        'codigo',
        'total',
        'data'
    ];
}