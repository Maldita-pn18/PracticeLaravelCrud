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
        // $this->call(UsersTableSeeder::class);
        \DB::table('accounts')->insert([
            'username' => 'testing',
            'password' => Hash::make('p@ssw0rd'),
        ]);
    }
}
