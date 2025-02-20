<?php

namespace App\Http\Controllers\Builder;

use App\Models\Builder;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class BuilderController extends Controller
{
    public function index()
    {
        // $builders = Builder::all();
        return view('BuilderManagement.BuilderList');
    }

    public function create()
    {
        return view('BuilderManagement.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'company_name' => 'required|string|max:255',
            'email' => 'required|email|unique:builders,email',
            'phone' => 'required|string|max:15',
            'password' => 'required|min:6',
            'status' => 'required|in:active,inactive',
        ]);

        try {
            Builder::create([
                'name' => $request->name,
                'company_name' => $request->company_name,
                'email' => $request->email,
                'phone' => $request->phone,
                'password' => Hash::make($request->password),
                'status' => $request->status,
            ]);

            return redirect()->route('builder.index')->with('success', 'Builder added successfully.');
        } catch (\Exception $e) {
            return back()->with('error', 'Something went wrong! ' . $e->getMessage());
        }
    }

    public function edit(Builder $builder)
    {
        return view('BuilderManagement.edit', compact('builder'));
    }

    public function update(Request $request, Builder $builder)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'company_name' => 'required|string|max:255',
            'email' => 'required|email|unique:builders,email,' . $builder->id,
            'phone' => 'required|string|max:15',
            'status' => 'required|in:active,inactive',
            'password' => 'nullable|min:6', // Optional password update
        ]);

        try {
            $data = $request->only(['name', 'company_name', 'email', 'phone', 'status']);

            if ($request->filled('password')) {
                $data['password'] = Hash::make($request->password);
            }

            $builder->update($data);

            return redirect()->route('builder.index')->with('success', 'Builder updated successfully.');
        } catch (\Exception $e) {
            return back()->with('error', 'Something went wrong! ' . $e->getMessage());
        }
    }

    public function destroy(Builder $builder)
    {
        try {
            $builder->delete();
            return redirect()->route('builder.index')->with('success', 'Builder deleted successfully.');
        } catch (\Exception $e) {
            return back()->with('error', 'Something went wrong! ' . $e->getMessage());
        }
    }
}
