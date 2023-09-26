<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\{
    Animais,
    Pessoa,
    HistoricoAdocao
};

class Adocao extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'id_adocao';
    protected $primaryKey = 'id_adocao';
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $fillable = [
        'adocao',
        'id_pessoa',
        'id_animal',
        'id_HistoricoAdocao'

    ];

    // Relacionamentos

    public function animais(){
        return $this->belongsTo(
            Animais::class,
            'id_adocao',
            'id_adocao'
        );
    }

    public function pessoa(){
        return $this->belongsTo(
            Pessoa::class,
            'id_adocao',
            'id_adocao'
        );
    }

    public function HistoricoAdocao(){
        return $this->belongsTo(
            HistoricoAdocao::class,
            'id_adocao',
            'id_adocao'
        );
    }
}
