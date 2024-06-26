<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Chamado extends Model
{
    use HasFactory, SoftDeletes;

    protected $table='chamados';
    protected $fillable = ['descricao', 'status', 'setor'];
}
