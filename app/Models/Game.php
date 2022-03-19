<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    // Category Attributtes
    // $this->attributes['id'] - int - contains the product primary key
    // $this->attributes['name'] - string - contains the product name 
    // $this->attributes['description'] - string - contains the product description
    protected $table = 'games';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'developer', 'description', 'genre', 'releasedate', 'price', 'rating', 'agerating'];
}
