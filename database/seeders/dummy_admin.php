<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\t_admins as Admin;

class dummy_admin extends Seeder
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
               'username'=>'Bambang',
               'password'=> bcrypt('07070707'),
               'email'=>'bambang@hotmail.com',
               'fullName'=>'Bambang Sutejo',
               'centre_id' =>'1',
               'centre_name' => 'Sanglah',
            ],
        ];
  
        foreach ($userData as $key => $val) {
            Admin::create($val);
        }
    }
}
