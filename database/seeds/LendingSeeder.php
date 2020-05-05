<?php

use Illuminate\Database\Seeder;

class LendingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Lending::class, 20)->create();
    }
}
