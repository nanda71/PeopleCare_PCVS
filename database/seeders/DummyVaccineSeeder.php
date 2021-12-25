<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\vaccines;

class DummyVaccineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vaccineData = [
            [
               'vaccine_name'=>'zeneca',
               'manufacturer'=> 'zeneca',
               'approved'=>1,
            ]
        ];
  
        foreach ($vaccineData as $key => $val) {
            vaccines::create($val);
        }
    }
}
