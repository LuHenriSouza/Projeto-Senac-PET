<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Adocao;

class HistoricoAdocao extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'HistoricoAdocao';
    protected $primaryKey = 'id_historios_adocoes';
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $fillable = [
        'HistoricoAdocao'

    ];

    //Relacionamentos

    public function adocao(){
        return $this->belongsTo(
            Adocao::class,
            'id_historicos_adocoes',
            'id_historicos_adocoes'
        );
    }
}
