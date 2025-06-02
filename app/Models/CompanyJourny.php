<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyJourny extends Model
{
    use HasFactory;
    protected $table = 'company_journey';
    //in protect fillable add above all fields
    protected $fillable = [
        'WhyChooseTitle',
        'WhyChooseDescription',
        'whyChooseImage',
        'OurMission',
        'OurVision',
        'OurValuesTitle',
        'OurValuesDescription',
        'OurValuesImage',
        'OurServicetitle1',
        'OurServiceDescription1',
        'OurServicetitle2',
        'OurServiceDescription2',
        'OurServicetitle3',
        'OurServiceDescription3',
    ];
}
