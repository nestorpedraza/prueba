<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tienda extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'descripcion', 'direccion', 'telefono'];

    // Relación con productos
    public function productos()
    {
        return $this->belongsToMany(Producto::class, 'producto_tiendas', 'tienda_id', 'producto_id');
    }
}