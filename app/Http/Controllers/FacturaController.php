<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Factura;
use App\Models\Producto;

class FacturaController extends Controller
{
    public function index()
    {
        $cliente = Cliente::with('facturas')->first();
        return $cliente;
    }

    public function store(Request $request)
    {
        //$cliente = Cliente::find($request->id);

        $cliente = new Cliente();

        $cliente->nombre = $request->nombre;
        $cliente->telefono = $request->telefono;

        $cliente->save();


        $cliente->facturas()->saveMany([
            new Factura([
                'fecha' => $request->fecha
            ]),
            new Factura([
                'fecha' => $request->fechados
            ]),
            new Factura([
                'fecha' => $request->fechatres
            ]),
        ]);

        return "Facturas guardadas con exito";
    }

    public function update(Request $request, $id)
    {
        $cliente = Cliente::find($id);

        $cliente->nombre = $request->nombre;
        $cliente->telefono = $request->telefono;

        $cliente->facturas[0]->fecha = $request->fecha;
        $cliente->facturas[1]->fecha = $request->fechados;
        $cliente->facturas[2]->fecha = $request->fechatres;

        $cliente->push();

        return "Facturas actualizadas con exito";
    }


}
