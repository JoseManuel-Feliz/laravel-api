<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $technologies = [
            'html',
            'css',
            'js',
            'vue.js',
            'php',
            'mysql',
            'laravel'
        ];

        foreach ($technologies as $tech) {
            $newtech = new Technology();
            $newtech->name = $tech;
            $newtech->save();
        }
    }
}