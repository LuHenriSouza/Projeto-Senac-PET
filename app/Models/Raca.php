<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\{
    Especie,
    Animais

};

class Raca extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'racas';
    protected $primaryKey = 'id_raca';
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $fillable = [
        'raca',
        'id_especie'
    ];

    // Relacionamentos

    public function animais(){
        return $this->hasMany(Animais::class, 'id_raca', 'id_raca');
    }

    public function especies(){
        return $this->belongsTo(Especie::class, 'id_especie', 'id_especie');
    }


}
