<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cocktail extends Model
{
    use HasFactory;

    public $table = 'cocktail';
    public $guarded = [];

    public function ingredients(){
        return $this->hasMany(Ingredients::class);
    }
}
