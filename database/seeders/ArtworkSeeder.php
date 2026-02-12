<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArtworkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Artwork::create([
            'title' => 'La noche estrellada',
            'technique' => 'Óleo sobre lienzo',
            'price' => 1000000,
            'artist_id' => 1
        ]);

        \App\Models\Artwork::create([
            'title' => 'La persistencia de la memoria',
            'technique' => 'Óleo sobre lienzo',
            'price' => 2000000,
            'artist_id' => 2
        ]);
    }
}
