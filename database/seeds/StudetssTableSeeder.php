<?php

use Illuminate\Database\Seeder;
use App\Student;

class StudetssTableSeeder extends Seeder
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
            'name'  =>  'Hasib Rahman',
            'batch_id'  =>  'WDPF44',
            'phone'  =>  '01680420999',
            'address'  =>  'Dhaka'
        ],
        [
            'name'  =>  'Shahin Hawlader',
            'batch_id'  =>  'WDPF44',
            'phone'  =>  '01358042026',
            'address'  =>  'Barisal'
        ]
        
        ];
        DB::table('students')->insert($data);
    }
}
