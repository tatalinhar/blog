<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categorias')->insert([
            'name' => 'sapato',
        ]);

        DB::table('categorias')->insert([
            'name' => 'meinha',
        ]);


        DB::table('categorias')->insert([
            'name' => 'botas',
        ]);
    }
}
