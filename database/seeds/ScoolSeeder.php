<?php

use Illuminate\Database\Seeder;

class ScoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        passthru( 'mysql -p scool < ~/Code/2dam1617/sql/scool.sql');
    }
}
