<?php

use Illuminate\Database\Seeder;

class ClienteTablaSeeder extends Seeder
{

    public function run()
    {
       $clientes = factory(App\Models\Cliente::class,10)
        ->create()
        ->each(function ($cliente){
            $factura = factory(App\Models\Factura::class)->make();
            $cliente->facturas()->save($factura);
            $factura->ventas()->save(factory(App\Models\Venta::class)->make());
        });
    }
}
