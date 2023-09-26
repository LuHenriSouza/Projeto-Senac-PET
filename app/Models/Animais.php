<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\{
    Raca,
    statusAdocao,
    Sexo,
    Adocao,
    HistoricoAnimal,
    Tamanho
};


class Animais extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'animais';
    protected $primaryKey = 'id_animal';
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $fillable = [
        'nome',
        'cor',
        'idade',
        'id_status_adocao',
        'id_raca',
        'id_tamanho',
        'id_historicoAnimal',
        'id_sexo'
    ];

    // Relacionamentos

    public function adocao(){
        return $this->belongsTo(
            Adocao::class,
            'id_animal',
            'id_animal'
        );
    }

    public function raca(){
        return $this->belongsTo(
            Raca::class,
            'id_animal',
            'id_animal'
        );
    }

    public function statusAdocao(){
        return $this->belongsTo(
            statusAdocao::class,
            'id_animal',
            'id_animal'
        );
    }

    public function sexo(){
        return $this->belongsTo(
            Sexo::class,
            'id_animal',
            'id_animal'
        );
    }

    public function HistoricoAnimal(){
        return $this->belongsTo(
            HistoricoAnimal::class,
            'id_animal',
            'id_animal'
        );
    }

    public function tamanho(){
        return $this->belongsTo(
            Tamanho::class,
            'id_animal',
            'id_animal'
        );
    }


}
