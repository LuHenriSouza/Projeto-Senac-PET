<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\{Raca, Animais};

class Especie extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'especies';
    protected $primaryKey = 'id_especie';
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $fillable = [
        'especie'

    ];

    // Relacionamentos

    public function raca(){
        return $this->hasMany(Raca::class, 'id_especie', 'id_especie');
    }

    public function animais()
    {
        return $this->hasManyThrough(Animais::class, Raca::class, 'id_especie', 'id_raca', 'id_especie', 'id_raca');
    }
}
