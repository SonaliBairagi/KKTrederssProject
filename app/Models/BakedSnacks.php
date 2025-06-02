<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BakedSnacks extends Model
{
    use HasFactory;
    protected $table = 'baked_snacks';
    protected $fillable = ['BSproduct_no', 'BSproduct_name', 'BSproduct_description', 'BSproduct_img'];
}
