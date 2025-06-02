<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeAboutUs extends Model
{
    use HasFactory;
    protected $fillable = ['title1', 'title2', 'description1', 'title3', 'description2', 'image'];
}
