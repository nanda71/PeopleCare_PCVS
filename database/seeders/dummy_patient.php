<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\t_patients as Patient;

class dummy_patient extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userData = [
            [
               'username'=>'Kurnia',
               'email'=>'Kurnia@hotmail.com',
               'fullName'=>'Kurniawati',
               'ic_passport' => "0987654",
               'password'=> bcrypt('07070707'),
            ],
        ];
  
        foreach ($userData as $key => $val) {
            Patient::create($val);
        }
    }
}
