<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Pessoa
;

class id_historico_pessoa extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'id_historico_pessoa';
    protected $primaryKey = 'id_historico_pessoa';
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $fillable = [
        'id_historico_pessoa'

    ];


    //Relacionamento

    public function pessoa(){
        return $this->belongsTo(
            pessoa::class,
            'id_historico_pessoa',
            'id_historico_pessoa'
        );
    }
}
