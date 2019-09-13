<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Factura;

class FacturaController extends Controller
{
    public function index()
    {
       $factura = Factura::all();
       return $factura;
    }
}
