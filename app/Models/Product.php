<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        // Esse fillable define os campos que podem ser preenchidos em massa. É uma variavel de ambiente. 
        // Coisas que podem ser incluidas pelo usuario de forma mais manual.
        'name',
        'description',
        'price',
    ];
}
