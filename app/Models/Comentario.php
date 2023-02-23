<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;
    protected $table = 'comentarios';
    protected $fillable = [
        'fecha_inicio',
        'usuario_id',
        'texto',
        'obra_id'
    ];

    public function obra_id()
    {
        return $this->belongsTo(Obra::class);
    }

    public function usuario_id()
    {
        return $this->hasMany(User::class);
    }
}
