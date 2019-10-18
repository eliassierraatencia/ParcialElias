<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $table = 'ventas';
    
    protected $fillable = [
        'factura_id',
        'producto_id'
    ];


    public function factura()
    {
        return $this->belongsTo('App\Models\Factura');
    }

    public function producto()
    {
        return $this->belongsTo('App\Models\Producto');
    }
}
