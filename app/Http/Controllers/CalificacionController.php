<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Producto;

class CalificacionController extends Controller
{
	public function index()
	{
		$cliente = Cliente::find(1);
        return $cliente->calificaciones;
		//return csrf_token();
	}

	public function store(Request $request)
	{
		$cliente = Cliente::find($request->idcliente);

		$producto = Producto::find($request->idproducto);
        
        
		$cliente->calificaciones()->create([
			'calificacion' => $request->calificacioncliente,
		]);

		$producto->calificaciones()->create([
			'calificacion' => $request->calificacionproducto,
		]);

	}

	public function update(Request $request, $id)
	{
		$cliente = Cliente::find($id);

		$producto = Producto::find($request->idproducto);

		$cliente->calificaciones[0]->calificacion = $request->calificacioncliente;

        $producto->calificaciones[0]->calificacion = $request->calificacionproducto;
        
		$cliente->push();
		
		$producto->push();
	}

	public function destroy($id)
	{
		$cliente = Cliente::find($id);

		$cliente->calificaciones()->delete();

	}

	
}
