<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    protected $table = 'facturas';
    
    protected $fillable = [
        'fecha',
        'cliente_id',
        'estado_factura'
    ];

    protected $hidden = ['created_at', 'updated_at'];

    protected $casts = [
        'estado_factura' => 'boolean',
    ];

    protected $appends = ['info_cliente', 'info_venta'];


    public function cliente()
    {
        return $this->belongsTo('App\Models\Cliente');
    }

    public function ventas()
    {
        return $this->hasMany('App\Models\Venta');
    }

    public function getInfoClienteAttribute()
    {
        return $this->cliente;
    }

    public function getInfoVentaAttribute()
    {
        return $this->ventas;
    }

}
