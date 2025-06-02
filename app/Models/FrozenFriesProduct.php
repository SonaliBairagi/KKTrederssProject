<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FrozenFriesProduct extends Model
{
    use HasFactory;
    protected $fillable = ['product_no', 'product_name', 'product_description', 'product_img'];
}
