<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';
    
    protected $fillable = [
        'nombre',
        'direccion',
        'telefono'
    ];

    protected $hidden = ['created_at', 'updated_at'];
    
    protected $appends = ['nombre_telefono'];

    public function facturas()
    {
        return $this->hasMany('App\Models\Factura');
    }

    public function getNombreTelefonoAttribute()
    {
        return "{$this->nombre} {$this->telefono}";
    }

}
