<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'productos';
    public $incrementing = true;
    public $timestamps = false;

    protected $fillable = [
        'nombre', 'tipo', 'stock', 'precio'
    ];

}
