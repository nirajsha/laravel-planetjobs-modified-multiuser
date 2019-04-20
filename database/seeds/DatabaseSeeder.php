<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\User::insert([
            'name' => 'Sushan Paudyal',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password'),
            'admin' => 1
        ]);
    }
}
