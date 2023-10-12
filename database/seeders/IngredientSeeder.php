<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ingredients;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Ingredients::insert([
            ['cocktail_id' => 1, 'name' => 'Vodka'],
            ['cocktail_id' => 2, 'name' => 'Rum'],
            ['cocktail_id' => 3, 'name' => 'Tequila'],
            ['cocktail_id' => 4, 'name' => 'Gin'],
            ['cocktail_id' => 5, 'name' => 'Whiskey'],
            ['cocktail_id' => 6, 'name' => 'Lime Juice'],
            ['cocktail_id' => 7, 'name' => 'Sugar'],
            ['cocktail_id' => 8, 'name' => 'Mint'],
            ['cocktail_id' => 9, 'name' => 'Soda'],
            ['cocktail_id' => 10, 'name' => 'Orange Juice'],
        ]);
    }
}
