<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FrozenPotatoProduct extends Model
{
    use HasFactory;
    protected $table = 'frize_potato';
    protected $fillable = ['Pproduct_no', 'Pproduct_name', 'Pproduct_description', 'Pproduct_img'];
}
