<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Animais;

class Historico_Animal extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'id_historico_animal';
    protected $primaryKey = 'id_historico_animal';
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $fillable = [
        'historico_animal'

    ];

    // Relacionamentos

    public function animais(){
        return $this->belongsTo(
            Animais::class,
            'id_historico_animal',
            'id_historico_animal'
        );
    }
}
