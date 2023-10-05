<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Animais;

class Tamanho extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'tamanhos';
    protected $primaryKey = 'id_tamanho';
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $fillable = [
        'tamanho'

    ];

    // Relacionamentos

    public function animais(){
        return $this->belongsTo(
            Animais::class,
            'id_tamanho',
            'id_tamanho'
        );
    }
}
