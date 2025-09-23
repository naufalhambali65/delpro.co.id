<?php

namespace App\Http\Controllers;

use App\Models\Style;
use Illuminate\Http\Request;

class StyleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
        ]);

         $validatedData['slug'] = generateUniqueSlug(Style::class, $validatedData['name']);

        Style::create($validatedData);

        return redirect( route('projects.index') )->with('success', 'New data added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Style $style)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Style $style)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Style $style)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
        ]);

        if(Style::where('id', $style->id)->first()->name != $validatedData['name']) {
            $validatedData['slug'] = generateUniqueSlug(Style::class, $validatedData['name']);
        }

        Style::where('id', $style->id)->update($validatedData);

        return redirect( route('projects.index') )->with('success', 'Data updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Style $style)
    {
        Style::destroy($style->id);
        return redirect(route('projects.index'))->with('success', 'Data deleted successfully.');
    }
}
