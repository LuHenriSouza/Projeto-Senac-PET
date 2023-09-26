<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Animais;

class statusAdocao extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'id_status_adocao';
    protected $primaryKey = 'id_status_adocao';
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $fillable = [
        'statusAdocao'

    ];

    // Relacionamentos

    public function animais(){
        return $this->belongsTo(
            Animais::class,
            'id_status_adocao',
            'id_status_adocao'
        );
    }

}
