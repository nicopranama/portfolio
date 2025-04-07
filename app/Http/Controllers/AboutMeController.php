<?php

namespace App\Http\Controllers;

use App\Models\AboutMe;
use Illuminate\Http\Request;

class AboutMeController extends Controller
{
    public function index()
    {
        $aboutMe = AboutMe::first(); 
        return view('about-me.index', compact('aboutMe'));
    }

    public function create()
    {
        return view('about-me.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'description' => 'required|string',
            'education' => 'nullable|string',
            'major' => 'nullable|string',
            'university' => 'nullable|string',
            'additional_info' => 'nullable|string'
        ]);

        AboutMe::updateOrCreate(
            ['id' => 1], 
            $validatedData
        );

        return redirect()->route('about-me.index')
            ->with('success', 'About me successfully updated.');
    }

    public function edit()
    {
        $aboutMe = AboutMe::first();
        return view('about-me.edit', compact('aboutMe'));
    }
}