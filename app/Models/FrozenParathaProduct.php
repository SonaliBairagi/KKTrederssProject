<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FrozenParathaProduct extends Model
{
    use HasFactory;
    protected $table = 'frozen_paratha'; // Specify the table name if it's different from the model name
    protected $fillable = ['product_no', 'product_name', 'product_description', 'product_img'];
}
