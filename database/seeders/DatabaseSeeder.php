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
        $this->call(dummy_admin::class);
        $this->call(dummy_patient::class);
        $this->call(dummy_healthcare_centre::class);
    }
}
