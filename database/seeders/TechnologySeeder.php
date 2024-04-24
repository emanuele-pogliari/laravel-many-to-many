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
            'Html',
            'Css',
            'JavaScript',
            'PHP',
            'Laravel',
            'Vue.js',
            'Bootstrap',
            'Sass',
        ];

        foreach ($technologies as $technology) {
            $newTechnology = new Technology();

            $newTechnology->name = $technology;

            $newTechnology->save();
        }
    }
}
