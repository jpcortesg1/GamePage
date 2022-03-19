<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $table = 'games';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'developer', 'description', 'genre', 'releasedate', 'price', 'rating', 'agerating'];
}
