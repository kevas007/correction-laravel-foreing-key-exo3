<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CouleurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('couleurs')->insert([
            [
                'couleur' => 'red',
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'couleur' => 'blue',
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'couleur' => 'vert',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
