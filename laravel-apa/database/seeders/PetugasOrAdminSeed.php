<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PetugasOrAdminSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Messi',
            'email' => 'messi@gmail.com',
            'password' =>Hash::make('12345'),
            'level' => 'petugas'
        ]);
        DB::table('users')->insert([
            'name' => 'Cosmos',
            'email' => 'cosmos@gmail.com',
            'password' =>Hash::make('12345'),
            'level' => 'admin'
        ]);
        DB::table('users')->insert([
            'name' => 'moh ihram',
            'email' => 'ihram@gmail.com',
            'password' =>Hash::make('12345'),
            'level' => 'petugas'
        ]);
    }
}
