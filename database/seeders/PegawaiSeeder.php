<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pegawais')->insert([
            [
                'nama' => 'diska',
                'kelamin' => 'L',
                'hp' => '09876543212'
            ],
            [
                'nama' => 'siska',
                'kelamin' => 'P',
                'hp' => '09474543222'
            ],
            [
                'nama' => 'dika',
                'kelamin' => 'L',
                'hp' => '09876543212'
            ]
        ]);
    }

}
