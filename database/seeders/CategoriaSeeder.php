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
            'nome' => 'sapato'
            'created_at' => now(),
            'update_at' => now(),

        DB::table('categorias')->insert([
            'nome' => 'meinha'
            'created_at' => now(),
            'created_at' => now(),


        ]);


        DB::table('categorias')->insert([
            'nome' => 'botas'
            'created_at' => now(),
            'created_at' => now(),

        ]);
    }
}
