<?php

namespace App\Http\Controllers\Builder;


use App\Models\Builder;
use App\Http\Controllers\Controller;  // Correct this line to use 'Controller' instead of 'Controllers'

use Illuminate\Http\Request;

class BuilderController extends Controller
{
    // Display a listing of Builders
    public function index()
    {
        return view('BuilderManagement.BuilderList');  // Simply return the view without passing any data
    }
    
    

    // // Show the form for creating a new Builder
    // public function create()
    // {
    //     return view('builders.create');
    // }

    // // Store a newly created Builder in the database
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required',
    //         'description' => 'required',
    //     ]);

    //     Builder::create($request->all());

    //     return redirect()->route('builders.index')->with('success', 'Builder created successfully.');
    // }

    // // Display the specified Builder
    // public function show(Builder $builder)
    // {
    //     return view('builders.show', compact('builder'));
    // }

    // // Show the form for editing the specified Builder
    // public function edit(Builder $builder)
    // {
    //     return view('builders.edit', compact('builder'));
    // }

    // // Update the specified Builder in the database
    // public function update(Request $request, Builder $builder)
    // {
    //     $request->validate([
    //         'name' => 'required',
    //         'description' => 'required',
    //     ]);

    //     $builder->update($request->all());

    //     return redirect()->route('builders.index')->with('success', 'Builder updated successfully.');
    // }

    // // Remove the specified Builder from the database
    // public function destroy(Builder $builder)
    // {
    //     $builder->delete();

    //     return redirect()->route('builders.index')->with('success', 'Builder deleted successfully.');
    // }
}
