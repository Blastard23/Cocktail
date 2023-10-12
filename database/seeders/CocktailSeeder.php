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
            ['name' => 'Margarita', 'brand' => 'Tequila Brand', 'alcohol' => 'Alcoholic', 'category' => 'Classic'],
            ['name' => 'Martini', 'brand' => 'Vodka Brand', 'alcohol' => 'Alcoholic', 'category' => 'Classic'],
            ['name' => 'Mojito', 'brand' => 'Rum Brand', 'alcohol' => 'Alcoholic', 'category' => 'Classic'],
            ['name' => 'Cosmopolitan', 'brand' => 'Vodka Brand', 'alcohol' => 'Alcoholic', 'category' => 'Classic'],
            ['name' => 'Daiquiri', 'brand' => 'Rum Brand', 'alcohol' => 'Alcoholic', 'category' => 'Classic'],
            ['name' => 'Pina Colada', 'brand' => 'Rum Brand', 'alcohol' => 'Alcoholic', 'category' => 'Classic'],
            ['name' => 'Old Fashioned', 'brand' => 'Whiskey Brand', 'alcohol' => 'Alcoholic', 'category' => 'Classic'],
            ['name' => 'Screwdriver', 'brand' => 'Vodka Brand', 'alcohol' => 'Alcoholic', 'category' => 'Classic'],
            ['name' => 'Whiskey Sour', 'brand' => 'Whiskey Brand', 'alcohol' => 'Alcoholic', 'category' => 'Classic'],
            ['name' => 'Negroni', 'brand' => 'Gin Brand', 'alcohol' => 'Alcoholic', 'category' => 'Classic'],
            ['name' => 'Virgin Mojito', 'brand' => 'Non-Alcoholic Brand', 'alcohol' => 'Non_Alcoholic', 'category' => 'Non_Alcoholic'],
        ]);
    }
}
