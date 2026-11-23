<?php

namespace Database\Seeders;

use App\Models\Pokemon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class pokemonsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   
        //name, previous_id, next_id
        $pokemons = [
            ["Bulbasaur", null, 2],
            ["Ivysaur", 1, 3],
            ["Venusaur", 2, null],
            ["Charmander", null, 5],
            ["Charmeleon", 4, 6],
            ["Charizard", 5, null],
            ["Squirtle", null, 8],
            ["Wartortle", 7, 9],
            ["Blastoise", 8, null],
        ];

        //$pokemonDB = new Pokemon()
        foreach ($pokemons as $pokemon) {
            Pokemon::insertOrIgnore(['name' => $pokemon[0]]);
        }

        foreach ($pokemons as $pokemon) {
            $db_pokemon = Pokemon::where('name', $pokemon[0])->first();
            $db_pokemon->previous_id = $pokemon[1];
            $db_pokemon->next_id = $pokemon[2];
            $db_pokemon->save();
            /*
            Pokemon::where('name', $pokemon[0])->update(
                ['previous_id' => $pokemon[1], 'next_id' => $pokemon[2]]
            );
            */
        }
    }
}
