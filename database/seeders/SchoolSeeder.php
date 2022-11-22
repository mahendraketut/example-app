<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('schools')->insert([
            'schoolId' => 'SCH001',
            'schoolName' => 'Sekolah Dasar Negeri 1 STIKOM Bali',
            'schooladdress' => 'Jl. Raya Puputan No. 1, Denpasar, Bali',
            'schoolcity' => 'Denpasar',
        ]);
    }
}