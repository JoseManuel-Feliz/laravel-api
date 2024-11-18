<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            'frontend',
            'backend',
            'fullstack',
        ];

        foreach ($types as $type) {
            $newType = new Type();
            $newType->project_type = $type;
            $newType->save();
        }
    }
}