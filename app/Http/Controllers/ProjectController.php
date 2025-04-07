<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'tech_stack' => 'nullable|string',
            'github_link' => 'nullable|url',
            'demo_link' => 'nullable|url',
            'status' => 'nullable|in:development,completed,on-hold'
        ]);

        Project::create($validatedData);

        return redirect()->route('projects.index')
            ->with('success', 'Project successfully added.');
    }

    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'tech_stack' => 'nullable|string',
            'github_link' => 'nullable|url',
            'demo_link' => 'nullable|url',
            'status' => 'nullable|in:development,completed,on-hold'
        ]);

        $project->update($validatedData);

        return redirect()->route('projects.index')
            ->with('success', 'Project successfully updated.');
    }

    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('projects.index')
            ->with('success', 'Project successfully deleted.');
    }
}