<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class ProjectTechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = Project::all();

        $technologies = Technology::all()->pluck('id')->toArray();

        //@dd($technologies);

        foreach ($projects as $project) {
            $project->technologies()->sync(array_rand($technologies, 3));
        }
    }
}