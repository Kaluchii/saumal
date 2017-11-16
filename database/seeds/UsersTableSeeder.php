<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('users')->insert([
            'name' => 'client',
            'email' => 'info@saumal.kz',
            'password' => bcrypt('G8i5K2jfi4oOw'),
        ]);
    }
}
