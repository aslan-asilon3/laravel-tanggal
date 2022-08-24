<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Registrant;
use Carbon\Carbon;

class RegistrantSeeder extends Seeder
{

    
    public function run()
    {

        $registrant = [
            [
                'name'=>'aslan1',
                'email'=> 'aslan1@gmail.com',

            ],
            [
                'name'=>'aslan2',
                'email'=> 'aslan2@gmail.com',

            ],

        ];



        foreach ($registrant as $key => $value) {

            Registrant::create($value);

        }

    }
}
