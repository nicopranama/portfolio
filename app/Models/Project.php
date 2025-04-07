<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title', 
        'description', 
        'tech_stack', 
        'github_link', 
        'demo_link', 
        'status'
    ];
}