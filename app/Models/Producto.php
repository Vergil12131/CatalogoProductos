<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    // Agregar un scope para filtrar por productos activos
    public function scopeActivos($query)
    {
        return $query->where('estado', 'activo');
    }


    // Agregar un scope para filtrar por estado, no se implementa. Usado para experimentar con scopes dinámicos
    public function scopeEstado($query, $estado)
    {
        return $query->where('estado', $estado);
    }

    // Agregar un scope para filtrar por productos con stock disponible. No se implementa, usado para experimentar combinación de scopes
    public function scopeConStock($query)
    {
        return $query->where('stock', '>', 0);
    }

    protected $fillable = [
    'nombre',
    'descripcion',
    'precio',
    'stock',
    'estado'
    ];
}
