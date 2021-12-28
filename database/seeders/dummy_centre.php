<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\t_centre as Centre;

class dummy_centre extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
               'centre_name'=>'Sanglah',
               'address'=>'Denpasar',
            ],[
                'centre_name'=>'Ganesha',
                'address'=>'Gianyar',
            ],[
                'centre_name'=>'Puri Bundha',
                'address'=>'Gianyar',
             ],
             
        ];
  
        foreach ($data as $key => $val) {
            Centre::create($val);
        }
    }
}
