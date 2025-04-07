<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $fillable = [
        'name', 
        'proficiency_level', 
        'category',
        'is_learning'
    ];
}