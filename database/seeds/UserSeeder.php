<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'role_id' => 1,
            'name' => 'Arão Joao',
            'email' => 'araodomingos04@gmail.com',
            'password' => Hash::make('araojoao04'),
        ]);
        DB::table('users')->insert([
            'role_id' => 2,
            'name' => 'Josue Joao',
            'email' => 'josuedomingos04@gmail.com',
            'password' => Hash::make('josuejoao04'),
        ]);

        DB::table('users')->insert([
            'role_id' => 3,
            'name' => 'Moises Joao',
            'email' => 'moisesdomingos04@gmail.com',
            'password' => Hash::make('josuejoao04'),
        ]);
    }
}
