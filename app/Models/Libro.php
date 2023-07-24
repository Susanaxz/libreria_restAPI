<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Libro extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'precio'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];


}


// Path: app\Models\libro.php