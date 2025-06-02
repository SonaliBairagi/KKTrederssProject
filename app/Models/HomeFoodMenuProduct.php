<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeFoodMenuProduct extends Model
{
    use HasFactory;
    protected $table = 'home_food_menu';
    protected $fillable = ['FoodMenuImage'];
}
