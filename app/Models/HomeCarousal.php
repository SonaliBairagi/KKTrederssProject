<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeCarousal extends Model
{
    use HasFactory;
    protected $table = 'home_carousal';
    protected $fillable = ['title1', 'title2', 'title3', 'description', 'image'];
}
