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

    protected $table = 'raca';
    protected $primaryKey = 'id_raca';
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $fillable = [
        'raca',
        'id_especies'
    ];

    // Relacionamentos

    public function animais(){
        return $this->belongsTo(
            Animais::class,
            'id_raca',
            'id_raca'
        );
    }

    public function especie(){
        return $this->belongsTo(
            Especie::class,
            'id_raca',
            'id_raca'
        );
    }


}
