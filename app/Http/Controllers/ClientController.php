<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\ClientCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Clients';
        $clients = Client::all();
        $categories = ClientCategory::all();
        return view('admin.clients.index', compact('title', 'clients', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Add Client';
        return view('admin.clients.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $validatedData = $request->validate([
            'name' => 'required|max:255',
            'logo' => 'image|file|max:2048',
            'category_id' => 'required|string',
        ]);

        if ($request->file('logo')) {
            $validatedData['logo'] = $request->file('logo')->store('client-logo', 'public');
        }

        Client::create($validatedData);

        return redirect( route('clients.index') )->with('success', 'New data added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Client $client)
    {
         $validatedData = $request->validate([
            'name' => 'required|max:255',
            'logo' => 'image|file|max:2048',
            'category_id' => 'required|string',
        ]);

        if ($request->file('logo')) {
            if ($request->old_logo) {
                Storage::disk('public')->delete($request->old_logo);
            }
            $validatedData['logo'] = $request->file('logo')->store('client-logo', 'public');
        }

        Client::where('id', $client->id)->update($validatedData);

        return redirect( route('clients.index') )->with('success', 'Data updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
       if ($client->logo) {
            Storage::disk('public')->delete($client->logo);
        }
        Client::destroy($client->id);
        return redirect(route('clients.index'))->with('success', 'Data deleted successfully.');
    }
}
