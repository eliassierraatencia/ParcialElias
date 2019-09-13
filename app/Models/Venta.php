<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $table = 'ventas';
    
    protected $fillable = [
        'factura_id',
        'producto',
        'vendedor',
        'cantidad'
    ];

    protected $hidden = ['created_at', 'updated_at'];
 
    protected $casts = [
        'producto' => 'array',
    ];

    public function factura()
    {
        return $this->belongsTo('App\Models\Factura');
    }

    public function setVendedorAttribute($value)
    {
        $this->attributes['vendedor'] = strtoupper($value);
    }


}
