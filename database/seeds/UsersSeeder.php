<?php

use Illuminate\Database\Seeder;

/**
 * Class UsersSeeder.
 */
class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        try {
            factory(App\User::class)->create([
                    "name" => "Sergi Tur Badenas",
                    "email" => "sergiturbadenas@gmail.com",
                    "password" => bcrypt(env('SERGI_PWD', '123456'))]
            );
        } catch (\Illuminate\Database\QueryException $exception) {

        }
    }
}