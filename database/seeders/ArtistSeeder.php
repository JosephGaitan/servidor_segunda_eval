<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Artist::create([
            'name' => 'Vincent van Gogh',
            'bio' => 'Pintor postimpresionista neerlandés.',
            'nationality' => 'Neerlandesa'
        ]);

        \App\Models\Artist::create([
            'name' => 'Salvador Dalí',
            'bio' => 'Líder del movimiento surrealista.',
            'nationality' => 'Española'
        ]);
    }
}
