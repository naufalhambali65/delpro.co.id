<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
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

        $validatedData['slug'] = generateUniqueSlug(Type::class, $validatedData['name']);

        Type::create($validatedData);

        return redirect( route('projects.index') )->with('success', 'New data added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Type $type)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Type $type)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Type $type)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
        ]);

        if(Type::where('id', $type->id)->first()->name != $validatedData['name']) {
            $validatedData['slug'] = generateUniqueSlug(Type::class, $validatedData['name']);
        }

        Type::where('id', $type->id)->update($validatedData);

        return redirect( route('projects.index') )->with('success', 'Data updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Type $type)
    {
        Type::destroy($type->id);
        return redirect(route('projects.index'))->with('success', 'Data deleted successfully.');
    }
}