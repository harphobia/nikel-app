<?php

namespace Database\Seeders;

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
        \App\Models\User::factory(20)->create();
        \App\Models\Car::factory(20)->create();
        \App\Models\Driver::factory(20)->create();
        \App\Models\log::factory(20)->create();
        \App\Models\OrderRequest::factory(20)->create();
    }
}
