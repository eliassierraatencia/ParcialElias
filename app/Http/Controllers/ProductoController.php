<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Factura;
use App\Models\Producto;

class ProductoController extends Controller
{
    public function index()
    {
        $producto = Producto::with('facturas')->first();
        return $producto;
    }

    public function store(Request $request)
    {
        
        $producto = new Producto();

        $producto->descripcion = $request->descripcion;
        $producto->precio = $request->precio;

        $producto->save();
        
        $producto->facturas()->attach([$request->factura1, $request->factura2]);
       
        return "Producto y Ventas guardadas con exito";
    }

    public function update(Request $request, $id)
    {
        $producto = Producto::find($id);

        $producto->descripcion = $request->descripcion;
        $producto->precio = $request->precio;

        $producto->update();
        
        $producto->facturas()->sync([$request->factura1, $request->factura2]);
        
        return "Facturas actualizadas con exito";
    }


}
