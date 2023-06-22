<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Endereco extends Model
{
    use HasFactory, SoftDeletes;

    protected $table  = 'enderecos';
    protected $primaryKey = 'id_endereco';
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    protected $fillabe = [
        'endereco',
        'numero',
        'complemento',
        'bairro',
        'cidade',
        'uf',
        'cep',
        'observacoes',
    ];
}
