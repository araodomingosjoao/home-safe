<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'role_id' => 1,
            'name' => 'Arão João',
            'email' => 'araodomingos04@gmail.com',
            'password' => Hash::make('araojoao04'),
        ]);
    }
}
