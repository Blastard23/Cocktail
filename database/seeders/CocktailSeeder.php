<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cocktail;

class CocktailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cocktail::insert([
            ['name' => 'Margarita', 'brand' => 'Tequila Brand', 'alcohol' => 'Alcoholic'],
            ['name' => 'Martini', 'brand' => 'Vodka Brand', 'alcohol' => 'Alcoholic'],
            ['name' => 'Mojito', 'brand' => 'Rum Brand', 'alcohol' => 'Alcoholic'],
            ['name' => 'Cosmopolitan', 'brand' => 'Vodka Brand', 'alcohol' => 'Alcoholic'],
            ['name' => 'Daiquiri', 'brand' => 'Rum Brand', 'alcohol' => 'Alcoholic'],
            ['name' => 'Pina Colada', 'brand' => 'Rum Brand', 'alcohol' => 'Alcoholic'],
            ['name' => 'Old Fashioned', 'brand' => 'Whiskey Brand', 'alcohol' => 'Alcoholic'],
            ['name' => 'Screwdriver', 'brand' => 'Vodka Brand', 'alcohol' => 'Alcoholic'],
            ['name' => 'Whiskey Sour', 'brand' => 'Whiskey Brand', 'alcohol' => 'Alcoholic'],
            ['name' => 'Negroni', 'brand' => 'Gin Brand', 'alcohol' => 'Alcoholic'],
            ['name' => 'Virgin Mojito', 'brand' => 'Non-Alcoholic Brand', 'alcohol' => 'Non_Alcoholic'],
        ]);
    }
}
