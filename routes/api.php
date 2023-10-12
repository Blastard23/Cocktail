<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cocktailController;
use App\Http\Controllers\ingredientController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/cocktail', [cocktailController::class, 'index']);
Route::get('/cocktail/{id}', [cocktailController::class, 'getCocktailbyID']);
Route::get('/cocktailss/{letter}', [cocktailController::class, 'getCocktailByLetter']);
Route::get('/cocktailsss/{name}', [cocktailController::class, 'getCocktailByName']);
Route::post('/cocktail', [cocktailController::class, 'store']);
Route::get('/rand', [cocktailController::class, 'RandomCocktail']);
Route::get('/rands', [cocktailController::class, 'TenRandomCocktails']);
Route::get('/cocktails/{alcoholType}', [cocktailController::class, 'getCocktailByAlcoholType']);
Route::get('/cocktaills/{category}', [cocktailController::class, 'getCocktailByCategory']);

Route::get('/cocktailImage/{filename}', [cocktailController::class, 'fileCocktailImage']);

Route::get('/ingredient', [ingredientController::class, 'index']);
Route::get('/ingredient/{id}', [ingredientController::class, 'getIngredientbyID']);
Route::get('/ingredients/{letter}', [ingredientController::class, 'getCocktailByLetter']);
Route::get('/ingredientss/{name}', [ingredientController::class, 'getIngredientByName']);
Route::post('/ingredient', [ingredientController::class, 'store']);