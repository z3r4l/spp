<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class PetugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("petugas")->insert([
            [
                'username' => 'admin',
                'nama_petugas' => 'SiAdmin',
                'password' => Hash::make('123'),
                'level' => 'admin',
                'created_at' => Carbon::now(),
            ],
            [
                'username' => 'petugas',
                'nama_petugas' => 'Si Petugas',
                'password' => Hash::make('123'),
                'level' => 'petugas',
                'created_at' => Carbon::now(),
            ],
        ]);
    }
}
