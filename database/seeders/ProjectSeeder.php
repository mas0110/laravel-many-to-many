<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $project = [
            'E-commerce',
            'Social network',
            'Prenotazione di viaggi:',
            'Blog',
            'E-learning',
            'gestione progetti',
        ];
        foreach($project as $element){
            $new_project = new Project();
            $new_project->name = $element;
            $new_project->slug = Str::slug
            ($new_project->name);
            $new_project->save();
        }
    }
}
