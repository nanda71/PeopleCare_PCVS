<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

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
               'role_num'=>1,
               'centre_name' => 'ganesha health centre',
            ],
            [
                'username'=>'bambang',
                'password'=> bcrypt('07070707'),
                'email'=>'patient2@hotmail.com',
                'fullName'=>'bambang sutejo',
                'role_num'=>0,
                'ic_passport' => '09871234',
            ],
        ];
  
        foreach ($userData as $key => $val) {
            User::create($val);
        }
    }
}
