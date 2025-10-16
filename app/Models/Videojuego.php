<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Videojuego extends Model
{
    use HasFactory;

    protected $table = 'videojuegos';
    
    protected $fillable = [
        'titulo',
        'año_lanzamiento',
        'genero'
    ];

    protected $casts = [
        'año_lanzamiento' => 'date',
    ];

    public function plataformas()
    {
        return $this->belongsToMany(Plataforma::class, 'videojuego_plataforma');
    }
}
