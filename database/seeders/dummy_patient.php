<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\tb_patient as Patient;

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
               'password'=> bcrypt('07070707'),
               'email'=>'admin1@hotmail.com',
               'fullName'=>'Kurniawati',
               'ic_passport' => "0987654",
            ],
        ];
  
        foreach ($userData as $key => $val) {
            Patient::create($val);
        }
    }
}
