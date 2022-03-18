<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PersonneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("personnes")->insert([
            'nom'=>'Smith',
            'prenom'=>'Alex',
            'dob'=>'1995-5-01',
            'website'=> 'www.example.com',
            'phoneNumber'=> '+123 456 7890',
            'degree'=>'Master',
            'email'=>'email@example.com',
            'freelance'=>'available',
            'city'=>'New York, USA',
            'age'=>30
        ]);
    }
}
