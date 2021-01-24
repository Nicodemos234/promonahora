<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Nicodemos',
            'email' => 'nicodemos54324@gmail.com',
            'password' => Hash::make(env('ADMIN_PASSWORD'))
        ]);
    }
}