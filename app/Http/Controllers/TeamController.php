<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Teams';
        $teams = Team::all();
        return view('admin.teams.index', compact('title', 'teams'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Add Team';
        return view('admin.teams.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'role' => 'required|max:255',
            'photo' => 'image|file|max:2048',
            'description' => 'required|string',
            'email' => 'required|email:dns',
            'facebook' => 'nullable|url',
            'twitter' => 'nullable|url',
            'linkedin' => 'nullable|url',
            'instagram' => 'nullable|url',
        ]);

        if ($request->file('photo')) {
            $validatedData['photo'] = $request->file('photo')->store('teams-photo', 'public');
        }

        Team::create($validatedData);

        return redirect( route('teams.index') )->with('success', 'New data added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Team $team)
    {
        $title = 'Detail Team';
        return view('admin.teams.show', compact('title', 'team'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Team $team)
    {
        $title = 'Update Team';
        return view('admin.teams.edit', compact('title', 'team'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Team $team)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'role' => 'required|max:255',
            'photo' => 'image|file|max:2048',
            'description' => 'required|string',
            'email' => 'required|email:dns',
            'facebook' => 'nullable|url',
            'twitter' => 'nullable|url',
            'linkedin' => 'nullable|url',
            'instagram' => 'nullable|url',
        ]);

        if ($request->file('photo')) {
            if ($request->oldPhoto) {
                Storage::disk('public')->delete($request->oldPhoto);
            }
            $validatedData['photo'] = $request->file('photo')->store('teams-photo', 'public');
        }

        Team::where('id', $team->id)->update($validatedData);

        return redirect( route('teams.index') )->with('success', 'Data updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Team $team)
    {
        if ($team->photo) {
            Storage::disk('public')->delete($team->photo);
        }
        Team::destroy($team->id);
        return redirect(route('teams.index'))->with('success', 'Data deleted successfully.');
    }
}
