<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HashBrownProduct extends Model
{
    use HasFactory;
    protected $table = 'hash_brown';
    protected $fillable = ['Hproduct_no', 'Hproduct_name', 'Hproduct_description', 'Hproduct_img'];
}
