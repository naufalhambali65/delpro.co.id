<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
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

        $validatedData['slug'] = generateUniqueSlug(City::class, $validatedData['name']);

        City::create($validatedData);

        return redirect( route('projects.index') )->with('success', 'New data added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(City $city)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(City $city)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, City $city)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
        ]);

        if(City::where('id', $city->id)->first()->name != $validatedData['name']) {
            $validatedData['slug'] = generateUniqueSlug(City::class, $validatedData['name']);
        }

        City::where('id', $city->id)->update($validatedData);

        return redirect( route('projects.index') )->with('success', 'Data updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(City $city)
    {
        City::destroy($city->id);
        return redirect(route('projects.index'))->with('success', 'Data deleted successfully.');
    }
}