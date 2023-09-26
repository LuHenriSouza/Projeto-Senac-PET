<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\{
    Sexo,
    Adocao,
    HistoricoPessoa
};

class Pessoa extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'pessoa';
    protected $primaryKey = 'id_pessoa';
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $fillable = [
        'nome',
        'email',
        'telefone',
        'endereco',
        'cep',
        'residencia_desc',
        'cidade',
        'id_HistoricoPessoa'

    ];

    //Relacionamento

    public function HistoricoPessoa(){
        return $this->belongsTo(
            Adocao::class,
            'id_animal',
            'id_animal'
        );
    }

}
