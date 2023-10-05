<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\{
    Animais,
    Pessoa
};

class Sexo extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'sexos';
    protected $primaryKey = 'id_sexo';
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $fillable = [
        'sexo'

    ];

    // Relacionamentos

    public function animais(){
        return $this->belongsTo(
            Animais::class,
            'id_sexo',
            'id_sexo'
        );
    }

    public function pessoa(){
        return $this->belongsTo(
            Pessoa::class,
            'id_sexo',
            'id_sexo'
        );
    }
}
