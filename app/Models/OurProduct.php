<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurProduct extends Model
{
    use HasFactory;
    protected $table = 'ourproducts';
    protected $fillable = ['Oproduct_no', 'Oproduct_name', 'Oproduct_description', 'Oproduct_img'];
}
