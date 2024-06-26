<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    use HasFactory;

    protected $fillable = [ //Definindo as colunas que serao preenchidas
        'subject',
        'body',
        'status'
    ];
}
