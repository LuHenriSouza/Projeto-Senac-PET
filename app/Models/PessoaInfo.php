<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PessoaInfo extends Model
{
    use HasFactory;

    protected $table = 'pessoa_info';
    protected $primaryKey = 'id_pessoa_info';
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $fillable = [
        'id_pessoa',
        'teve_animal',
        'animal_guarda',
        'qnt_pessoa_casa',
        'motivacao',
        'observacoes'
    ];

    // Relacionamento
    public function Pessoa(){
        return $this->belongsTo(Pessoa::class, 'id_pessoa');
    }
}
