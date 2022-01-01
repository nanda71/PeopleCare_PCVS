<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\t_vaccines as Vaccines;

class dummy_vaccines extends Seeder
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
                'vaccine_name'=>'Astra Zeneca',
                'manufacturer'=>'PT.Sanbe Farma'
            ],[
                'vaccine_name'=>'Sinovac',
                'manufacturer'=>'Sinovac'
            ],[
                'vaccine_name'=>'Sinopham',
                'manufacturer'=>'PT.Sanbe Farma'
            ],[
                'vaccine_name'=>'Moderna',
                'manufacturer'=>'PT.Sanbe Farma'
            ],[
                'vaccine_name'=>'Pfizer',
                'manufacturer'=>'PT.Sanbe Farma'
            ],[
                'vaccine_name'=>'Novavax',
                'manufacturer'=>'PT.Sanbe Farma'
            ],[
                'vaccine_name'=>'Spunti-V',
                'manufacturer'=>'PT.Sanbe Farma'
            ],[
                'vaccine_name'=>'Janssen',
                'manufacturer'=>'PT.Sanbe Farma'
            ],
        ];

        foreach ($data as $key => $val) {
            Vaccines::create($val);
        }


    }
}
