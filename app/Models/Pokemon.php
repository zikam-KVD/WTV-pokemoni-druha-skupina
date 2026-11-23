<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    //s jakou tabulkou je propojen Model
    protected $table = "pokemons";

    //nutno vyplnit při zakládání
    protected $fillable = ['name'];
}
