<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\tb_admin as Admin;

class DummyUsersSeeder extends Seeder
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
               'centre_name' => "ganesha health centre",
            ],
        ];
  
        foreach ($userData as $key => $val) {
            Admin::create($val);
        }
    }
}
