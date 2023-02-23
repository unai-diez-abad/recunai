<?php

namespace App\Models;
use App\Enums\TipoEdificio;
use App\Enums\TipoObra;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obra extends Model
{
    use HasFactory;
    
    protected $table = 'obras';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'tipo_edificio',
        'tipo_obra',
        'direcion',
        'fecha_inicio',
        'fecha_fin',
        'descripcion',
        'solicitante_id'
        
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [

    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'tipo_edificio' => TipoEdificio::class,
        'tipo_obra'=> TipoObra::class,
    ];

    // relaciones

    public function solicitante_id()
    {
        return $this->belongsTo(Solicitante::class);
    }

    public function Comentario()
    {
        return $this->hasMany(Comentario::class);
    }
}
