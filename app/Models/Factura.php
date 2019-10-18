<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    protected $table = 'facturas';
    
    protected $fillable = [
        'fecha',
        'cliente_id'
    ];

    public function cliente()
    {
        return $this->belongsTo('App\Models\Cliente');
    }

    public function productos()
    {
        return $this->belongsToMany('App\Models\Producto','ventas','factura_id','producto_id')->withTimestamps();
    }
}
