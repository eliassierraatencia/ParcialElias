<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Ubicacion;

class ClienteController extends Controller
{

    public function index()
    {
      $cliente = Cliente::with('ubicacion')->first();
      return $cliente;
      //return csrf_token();
    }

    public function store(Request $request)
    {
      $cliente = new Cliente();

      $cliente->nombre = $request->nombre;
      $cliente->telefono = $request->telefono;

      $cliente->save();

      $ubicacion = new Ubicacion();

      $ubicacion->direccion = $request->direccion;
      $ubicacion->barrio = $request->barrio;
      $ubicacion->ciudad = $request->ciudad;

      $cliente->ubicacion()->save($ubicacion);

      return 'Se guardo correctamente el cliente y su ubicacion';
    }

    public function update(Request $request, $id)
    {
      $cliente = Cliente::find($id);

      $cliente->nombre = $request->nombre;
      $cliente->telefono = $request->telefono;

      $cliente->update();

      $ubicacion['direccion'] = $request->direccion;
      $ubicacion['barrio'] = $request->barrio;
      $ubicacion['ciudad'] = $request->ciudad;

      $cliente->ubicacion()->update($ubicacion);

      return 'Se actualizo cliente y su ubicacion';
    }
    
}
