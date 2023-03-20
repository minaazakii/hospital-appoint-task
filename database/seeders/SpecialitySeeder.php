<?php

namespace Database\Seeders;

use App\Models\Speciality;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SpecialitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Speciality::create(['title'=>'General practice']);
        Speciality::create(['title'=>'Pediatics']);
        Speciality::create(['title'=>'Radiology']);
        Speciality::create(['title'=>'Ophthalmology']);
        Speciality::create(['title'=>'Sports medicine']);
        Speciality::create(['title'=>'rehabilitation']);
        Speciality::create(['title'=>'Oncology']);
        Speciality::create(['title'=>'Dermatology']);
        Speciality::create(['title'=>'Emergency Medicine']);
    }
}
