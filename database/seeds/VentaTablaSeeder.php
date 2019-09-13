<?php

use Illuminate\Database\Seeder;

class VentaTablaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Venta::class,10)->create();
    }
}
