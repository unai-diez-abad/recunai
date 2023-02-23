<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Solicitante extends Model
{
    use HasApiTokens, HasFactory, Notifiable;


    protected $table = 'solicitantes';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nombre',
        'apellidos',
        'DNI',
        'direcion_residencia',
        'email',
        'tel',
    ];
    public function obras()
    {
        return $this->hasMany(obras::class);
    }
}
