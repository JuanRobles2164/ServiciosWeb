<?php

use Illuminate\Database\Seeder;

class ImpresoraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        return factory(Impresora::class, 5)->create();
    }
}
