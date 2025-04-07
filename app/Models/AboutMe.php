<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutMe extends Model
{
    protected $table = 'about_me';
    
    protected $fillable = [
        'description',
        'education',
        'major',
        'university',
        'additional_info'
    ];
}