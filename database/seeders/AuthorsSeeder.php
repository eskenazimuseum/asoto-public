<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('authors')->insert([
            [
                'id' => 1,
                'first_name' => 'Galina',
                'last_name' => 'Olmsted',
                'display_name' => 'Galina Olmsted, PhD',
                'image_path' => 'galina_olmsted.jpg',
                'institution_name' => 'Eskenazi Museum of Art, Indiana University',
            ],
            [
                'id' => 2,
                'first_name' => 'Adelheid',
                'last_name' => 'Gealt',
                'display_name' => 'Dr. Adelheid M. Gealt',
                'image_path' => 'heidi_gealt.jpg',
                'institution_name' => 'Project Director, A Space of Their Own (2015-2021)',
            ],
        ]);
    }
}
