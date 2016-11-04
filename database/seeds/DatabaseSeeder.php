<?php

use Illuminate\Database\Seeder;
use Scool\Curriculum\Database\Seeds\CurriculumSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CurriculumSeeder::class);
    }
}
