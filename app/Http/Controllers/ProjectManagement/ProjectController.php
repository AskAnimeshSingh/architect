<?php

namespace App\Http\Controllers\ProjectManagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProjectManagement; // Assuming you have a Project model

class ProjectController extends Controller
{
    /**
     * Display a listing of projects.
     */
    public function index()
    {
        // $projects = ProjectManagement::all();
        return view('projectManagement.projectlist');
    }

    /**
     * Show the form for creating a new project.
     */
    public function create()
    {
        return view('projectManagement.create');
    }

    /**
     * Store a newly created project in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'duration' => 'required|integer|min:1',
            'status' => 'required|in:active,inactive',
        ]);

        ProjectManagement::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'duration' => $request->duration,
            'status' => $request->status,
        ]);

        return redirect()->route('project.list')->with('success', 'Project created successfully!');
    }

    /**
     * Show the form for editing the specified project.
     */
    public function edit($id)
    {
        $project = ProjectManagement::findOrFail($id);
        return view('projectManagement.edit', compact('project'));
    }

    /**
     * Update the specified project in storage.
     */
    public function update(Request $request, $id)
    {
        $project = ProjectManagement::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'duration' => 'required|integer|min:1',
            'status' => 'required|in:active,inactive',
        ]);

        $project->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'duration' => $request->duration,
            'status' => $request->status,
        ]);

        return redirect()->route('project.list')->with('success', 'Project updated successfully!');
    }

    /**
     * Remove the specified project from storage.
     */
    public function destroy($id)
    {
        $project = ProjectManagement::findOrFail($id);
        $project->delete();

        return redirect()->route('project.list')->with('success', 'Project deleted successfully!');
    }
}
