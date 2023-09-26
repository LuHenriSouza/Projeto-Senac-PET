<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Pessoa
;

class HistoricoPessoa extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'HistoricoPessoa';
    protected $primaryKey = 'id_HistoricoPessoa';
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $fillable = [
        'HistoricoPessoa'

    ];


    //Relacionamento

    public function pessoa(){
        return $this->belongsTo(
            pessoa::class,
            'id_HistoricoPessoa',
            'id_HistoricoPessoa'
        );
    }
}
