<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Venta;

class VentaController extends Controller
{
    public function index()
    {
       $venta = Venta::all();
       return $venta;
    }
}
