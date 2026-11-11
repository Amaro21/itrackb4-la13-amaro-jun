<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie;
use App\Models\Genre;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $action    = Genre::create(['name' => 'Action']);
        $adventure = Genre::create(['name' => 'Adventure']);
        $scifi     = Genre::create(['name' => 'Sci-Fi']);

        Movie::create([
            'title' => 'Batman',
            'genre_id' => $action->id,
            'rating' => 4,
            'year' => 2003,
            'is_blockbuster' => true,
            'director' => 'Steve',
        ]);

        Movie::create([
            'title' => 'Tarzan',
            'genre_id' => $adventure->id,
            'rating' => 4,
            'year' => 2000,
            'is_blockbuster' => false,
            'director' => 'Gregory',
        ]);

        Movie::create([
            'title' => 'The Flash',
            'genre_id' => $action->id,
            'rating' => 4,
            'year' => 2010,
            'is_blockbuster' => true,
            'director' => 'Jhon Wo',
        ]);

        Movie::create([
            'title' => 'Antman',
            'genre_id' => $scifi->id,
            'rating' => 4,
            'year' => 2017,
            'is_blockbuster' => true,
            'director' => 'Justine',
        ]);

        Movie::create([
            'title' => 'Ramboo',
            'genre_id' => $action->id,
            'rating' => 4,
            'year' => 2005,
            'is_blockbuster' => true,
            'director' => 'Nash',
        ]);

        Movie::create([
            'title' => 'Spider-Man',
            'genre_id' => $action->id,
            'rating' => 5,
            'year' => 2002,
            'is_blockbuster' => true,
            'director' => 'Sam Raimi',
        ]);

        Movie::create([
            'title' => 'Iron Man',
            'genre_id' => $scifi->id,
            'rating' => 5,
            'year' => 2008,
            'is_blockbuster' => true,
            'director' => 'Jon Favreau',
        ]);

        Movie::create([
            'title' => 'Jurassic Park',
            'genre_id' => $adventure->id,
            'rating' => 5,
            'year' => 1993,
            'is_blockbuster' => true,
            'director' => 'Steven Spielberg',
        ]);

        Movie::create([
            'title' => 'Avatar',
            'genre_id' => $scifi->id,
            'rating' => 5,
            'year' => 2009,
            'is_blockbuster' => true,
            'director' => 'James Cameron',
        ]);

        Movie::create([
            'title' => 'Jumanji',
            'genre_id' => $adventure->id,
            'rating' => 4,
            'year' => 1995,
            'is_blockbuster' => true,
            'director' => 'Joe Johnston',
        ]);

        Movie::create([
            'title' => 'The Avengers',
            'genre_id' => $action->id,
            'rating' => 5,
            'year' => 2012,
            'is_blockbuster' => true,
            'director' => 'Joss Whedon',
        ]);

        Movie::create([
            'title' => 'Interstellar',
            'genre_id' => $scifi->id,
            'rating' => 5,
            'year' => 2014,
            'is_blockbuster' => true,
            'director' => 'Christopher Nolan',
        ]);

        Movie::create([
            'title' => 'King Kong',
            'genre_id' => $adventure->id,
            'rating' => 4,
            'year' => 2005,
            'is_blockbuster' => true,
            'director' => 'Peter Jackson',
        ]);

        Movie::create([
            'title' => 'Transformers',
            'genre_id' => $scifi->id,
            'rating' => 4,
            'year' => 2007,
            'is_blockbuster' => true,
            'director' => 'Michael Bay',
        ]);

        Movie::create([
            'title' => 'Gladiator',
            'genre_id' => $action->id,
            'rating' => 5,
            'year' => 2000,
            'is_blockbuster' => true,
            'director' => 'Ridley Scott',
        ]);

        Movie::create([
            'title' => 'The Mummy',
            'genre_id' => $adventure->id,
            'rating' => 4,
            'year' => 1999,
            'is_blockbuster' => true,
            'director' => 'Stephen Sommers',
        ]);

        Movie::create([
            'title' => 'Doctor Strange',
            'genre_id' => $scifi->id,
            'rating' => 5,
            'year' => 2016,
            'is_blockbuster' => true,
            'director' => 'Scott Derrickson',
        ]);

        Movie::create([
            'title' => 'Mission Impossible',
            'genre_id' => $action->id,
            'rating' => 4,
            'year' => 1996,
            'is_blockbuster' => true,
            'director' => 'Brian De Palma',
        ]);

        Movie::create([
            'title' => 'Finding Nemo',
            'genre_id' => $adventure->id,
            'rating' => 5,
            'year' => 2003,
            'is_blockbuster' => true,
            'director' => 'Andrew Stanton',
        ]);

        Movie::create([
            'title' => 'The Matrix',
            'genre_id' => $scifi->id,
            'rating' => 5,
            'year' => 1999,
            'is_blockbuster' => true,
            'director' => 'The Wachowskis',
        ]);
    }
}
