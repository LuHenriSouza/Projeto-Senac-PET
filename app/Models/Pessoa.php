<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\{
    Sexo,
    Adocao,
    id_historico_pessoa
};

class Pessoa extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'pessoas';
    protected $primaryKey = 'id_pessoa';
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $fillable = [
        'id_user',
        'telefone',
        'cep',
        'estado',
        'cidade',
        'endereco',
        'bairro',
        'residencia_desc',
        'numero'
    ];

    //Relacionamento

    public function id_historico_pessoa(){
        return $this->belongsTo(
            Adocao::class,
            'id_historico_pessoa',
            'id_historico_pessoa'
        );
    }

    public function Sexo(){
        return $this->belongsTo(
            Sexo::class,
            'pessoa_id_pessoa',
            'id_pessoa'
        );
    }

    public function Adocao(){
        return $this->belongsTo(
            Adocao::class,
            'pessoa_id_pessoa',
            'id_pessoa'
        );
    }

    public function Pessoa_Info(){
        return $this->hasOne(PessoaInfo::class);
    }
}
