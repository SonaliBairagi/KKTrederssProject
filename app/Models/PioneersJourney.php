<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PioneersJourney extends Model
{
    use HasFactory;
    protected $table = 'pioneers_journey'; 
    protected $fillable = [
        'title1',
        'description1',
        'image1',
        'title2',
        'description2',
        'image2',
    ];
}
