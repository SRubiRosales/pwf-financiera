<?php

use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Cada vez que se refrescan las migraciones se crean los datos fake
        factory(App\Models\Customer::class, 20)->create();
    }
}
