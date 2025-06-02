<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class veggieSpecialties extends Model
{
    use HasFactory;
    protected $table = 'veggie_specialties';
    protected $fillable = ['VSproduct_no', 'VSproduct_name', 'VSproduct_description', 'VSproduct_img'];
}
