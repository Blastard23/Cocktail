<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ingredients;
use Illuminate\Support\Facades\Validator;

class ingredientController extends Controller
{
    public function index(){
        $ingredient = Ingredients::get();

        return response()->json([
            'message' => 'Ingredients displayed successfully',
            'code' => 200,
            'status' => 'OK',
            'line' => "line" . __LINE__ . "" . basename(__LINE__),
            'results' => $ingredient,
        ]);
    }

    public function getIngredientbyID($id){
        $ingredient = Ingredients::find($id);

        if(!$ingredient){
            abort(
                response()->json([
                    'message' => 'Ingredient not Found!',
                    'status' => 'NOT FOUND',
                    'code' => 404
                ], 404)
            );
        }

        return response()->json([
            'message' => 'Ingredient Displayed Successfully!',
            'status' => 'OK',
            'code' => '200',
            'results' => $ingredient 
        ]);
    }

    public function store(Request $request){
        $rules = [
            'cocktail_id' => 'required|exists:cocktail,id',
            'name' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()){
            return response()->json([$validator->errors(), 400]);
        }

        $data = $request->validate([
            'cocktail_id' => 'required|exists:cocktail,id',
            'name' => 'required',
        ]);

        $ingredient = Ingredients::create($data);

        return response()->json([
            'message' => 'Ingredient created successfully',
            'code' => 200,
            'status' => 'OK',
            'line' => "line" . __LINE__ . "" . basename(__LINE__),
            'results' => $ingredient,
        ]);
    }

    public function getIngredientByName($name){
        $ingredient = Ingredients::where('name', $name)->first();

            if(!$ingredient){
                abort(
                    response()->json([
                        'message' => 'Ingredient not found',
                        'code' => 404,
                        'status' => 'NOT FOUND',
                        'line' => "line " . __LINE__ . " " . basename(__LINE__),
                    ], 404)
                );
            }

        return response()->json([
            'message' => 'Ingredient displayed successfully',
            'code' => 200,
            'status' => 'OK',
            'line' => "line " . __LINE__ . " " . basename(__LINE__),
            'results' => $ingredient,
        ]);
    }
}
