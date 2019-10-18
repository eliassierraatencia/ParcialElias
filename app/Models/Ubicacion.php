<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ubicacion extends Model
{
    protected $table = 'ubicaciones';
    
    protected $fillable = [
        'direccion',
        'barrio',
        'ciudad',
        'cliente_id'
    ];

    public function cliente()
    {
        return $this->belongsTo('App\Models\Cliente');
    }
}
