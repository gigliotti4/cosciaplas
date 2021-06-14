<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aplicacione extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'orden',
        'imagen',
        'nombre',
        'destacados',
    ];
}
