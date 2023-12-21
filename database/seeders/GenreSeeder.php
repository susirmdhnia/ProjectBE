<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use illuminate\Support\Facades\DB;

class Genreseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('genres')->insert(['genre' => 'Horror',]);

        DB::table('genres')->insert(['genre' => 'Thriller',]);

        DB::table('genres')->insert(['genre' => 'Romance',]);

        DB::table('genres')->insert(['genre' => 'Kids & Family',]);
    }
}
