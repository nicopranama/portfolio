<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index()
    {
        $skills = Skill::all();
        $categories = $skills->pluck('category')->unique();
        return view('skills.index', compact('skills', 'categories'));
    }

    public function create()
    {
        return view('skills.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255|unique:skills,name',
            'proficiency_level' => 'required|integer|min:0|max:100',
            'category' => 'required|string|max:100',
            'is_learning' => 'boolean'
        ]);

        Skill::create($validatedData);

        return redirect()->route('skills.index')
            ->with('success', 'Skill successfully added.');
    }

    public function edit(Skill $skill)
    {
        return view('skills.edit', compact('skill'));
    }

    public function update(Request $request, Skill $skill)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255|unique:skills,name,'.$skill->id,
            'proficiency_level' => 'required|integer|min:0|max:100',
            'category' => 'required|string|max:100',
            'is_learning' => 'boolean'
        ]);

        $skill->update($validatedData);

        return redirect()->route('skills.index')
            ->with('success', 'Skill successfully updated.');
    }

    public function destroy(Skill $skill)
    {
        $skill->delete();

        return redirect()->route('skills.index')
            ->with('success', 'Skill successfully deleted.');
    }
}