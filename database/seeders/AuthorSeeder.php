<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $authors = [
            [
                'name' => 'Mario',
                'surname' => 'Rossi'
            ],
            [
                'name' => 'Luigi',
                'surname' => 'Verdi'
            ],
            [
                'name' => 'Luca',
                'surname' => 'Bianchi'
            ],
            [
                'name' => 'Giulia',
                'surname' => 'Neri'
            ],
            [
                'name' => 'Anna',
                'surname' => 'Gialli'
            ],
            [
                'name' => 'Marco',
                'surname' => 'Marroni'
            ],
            [
                'name' => 'Sara',
                'surname' => 'Grigi'
            ],
            [
                'name' => 'Francesca',
                'surname' => 'Viola'
            ],
            [
                'name' => 'Andrea',
                'surname' => 'Celesti'
            ],
            [
                'name' => 'Elisa',
                'surname' => 'Rosa'
            ],
            [
                'name' => 'Paolo',
                'surname' => 'Arancioni'
            ],
            [
                'name' => 'Simona',
                'surname' => 'Blu'
            ],
            [
                'name' => 'Alessandro',
                'surname' => 'Verde'
            ],
            [
                'name' => 'Chiara',
                'surname' => 'Gialloneri'
            ],
            [
                'name' => 'Matteo',
                'surname' => 'Rosaverde'
            ],
        ];

        foreach($authors as $author){
            Author::create([
                'name'=>$author['name'],
                'surname'=>$author['surname'],
            ]);
    }
}
}
