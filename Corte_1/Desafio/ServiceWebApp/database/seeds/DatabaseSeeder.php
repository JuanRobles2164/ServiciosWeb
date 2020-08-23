<?php

use App\Impresora;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $data = factory(Impresora::class, 3000)->create();
        $data = null;
    }
}
