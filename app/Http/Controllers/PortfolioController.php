<?php

namespace App\Http\Controllers;

use App\Models\AboutMe;
use App\Models\Contact;
use App\Models\Project;
use App\Models\Skill;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $aboutMe = AboutMe::first();
        $skills = Skill::all();
        $projects = Project::all();
        $contacts = Contact::all();
        $categories = $skills->pluck('category')->unique();
        
        return view('portfolio.index', compact('aboutMe', 'skills', 'projects', 'contacts', 'categories'));
    }
}