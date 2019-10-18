<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';
    
    protected $fillable = [
        'descripcion',
        'precio',
    ];

    public function facturas()
    {
        return $this->belongsToMany('App\Models\Factura','ventas','producto_id','factura_id')->withTimestamps();
    }

    public function calificaciones()
    {
        return $this->morphMany('App\Models\Calificacion', 'scoreable');
    }
}
