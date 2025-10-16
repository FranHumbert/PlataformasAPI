<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plataforma extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'fabricante'
    ];

    public function videojuegos()
    {
        return $this->belongsToMany(Videojuego::class, 'videojuego_plataforma');
    }

    public static function masPopular()
    {
        return self::withCount('videojuegos')
            ->orderBy('videojuegos_count', 'desc')
            ->first();
    }
}
