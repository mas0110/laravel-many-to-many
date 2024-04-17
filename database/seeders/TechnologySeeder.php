<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $technology  = [
            'Database',
            'Server',
            'Api',
            'FrontEnd',
            'BackEnd',
        ];
        foreach($technology as $element){
            $new_technology = new Technology();
            $new_technology->name = $element;
            $new_technology->slug = Str::slug
            ($new_technology->name);
            $new_technology->save();
        }
    }
}
