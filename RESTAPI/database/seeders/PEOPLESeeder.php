<?php

namespace Database\Seeders;
use App\Models\PEOPLE;
use Illuminate\Database\Seeder;

class PEOPLESeeder extends Seeder
{
    public function run()
    {
        PEOPLE::factory()
            ->count(50)
            ->creat();
    }
}
