<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AuthorsSeeder::class,
            EssaysSeeder::class,
            ArtistsSeeder::class,
            TimelinesSeeder::class,
            ArtworksSeeder::class,
            RelationshipsSeeder::class,
        ]);
    }
}
