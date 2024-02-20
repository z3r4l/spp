<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kelas')->insert([
            [
                'nama_kelas' => '1',
                'rombel' => '1',
                'created_at' => Carbon::now(),
            ],
            [
                'nama_kelas' => '1',
                'rombel' => '2',
                'created_at' => Carbon::now(),
            ],
            [
                'nama_kelas' => '2',
                'rombel' => '1',
                'created_at' => Carbon::now(),
            ],
            [
                'nama_kelas' => '2',
                'rombel' => '2',
                'created_at' => Carbon::now(),
            ],
            [
                'nama_kelas' => '3',
                'rombel' => '1',
                'created_at' => Carbon::now(),
            ],
            [
                'nama_kelas' => '3',
                'rombel' => '2',
                'created_at' => Carbon::now(),
            ],
        ]);
    }
}
