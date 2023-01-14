<?php

namespace Database\Seeders;
use App\Models\PEOPLE;
use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(class: [
           PEOPLE::class
        ]);
    }
}
