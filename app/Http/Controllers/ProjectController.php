<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Message;
use App\Models\Project;
use App\Models\Style;
use App\Models\TemporaryFile;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Crypt;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Projects';
        $projects = Project::latest()->get();
        $types = Type::all();
        $styles = Style::all();
        $cities = City::all();
        $newMessage = Message::where('status', 0)->count();
        return view('admin.projects.index', compact('title', 'projects', 'types', 'styles', 'cities', 'newMessage'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Add Project';
        $styles = Style::all();
        $types = Type::all();
        $cities = City::all();
        $newMessage = Message::where('status', 0)->count();
        return view('admin.projects.create', compact('title', 'styles', 'types', 'cities', 'newMessage'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'client_name' => 'required|max:255',
            'client_address' => 'required|max:255',
            'client_contact' => 'required|string|max:15',
            'type_id' => 'required|integer|exists:types,id',
            'style_id' => 'required|integer|exists:styles,id',
            'city_id' => 'required|integer|exists:cities,id',
            'cover_image' => 'image|file',
            'description' => 'required|string',
            'unit_size' => 'required|max:255',
            'job_list' => 'required|string',
            'material' => 'required|max:255',
            'worker' => 'required|string',
            'job_status' => 'required|in:waiting,in_progress,in_review,done,cancelled,rejected',
            'visibility' => 'required|in:public,private',
            'progress' => 'required|integer|between:0,100',
        ]);

        $temp_files = TemporaryFile::all();
        $images = [];
        $validatedData['slug'] = generateUniqueSlug(Project::class, $validatedData['title']);

        if ($request->file('cover_image')) {
            $validatedData['cover_image'] = $request->file('cover_image')->store('projects-cover-image/', 'public');
        }
        foreach ($temp_files as $file) {
            $newPath = str_replace('temp_files', 'projects-images/' . $validatedData['slug'], $file->image);
            Storage::disk('public')->move($file->image, $newPath);
             array_push($images, $newPath);
            $file->delete();
        }

        $validatedData['images'] = json_encode($images);


        Project::create($validatedData);

        return redirect( route('projects.index') )->with('success', 'New data added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        $title = 'Project Details';
        $encryptedSlug = Crypt::encryptString($project->slug);
        $images = json_decode($project->images ?? '[]', true);
        $newMessage = Message::where('status', 0)->count();
        return view('admin.projects.show', compact('title', 'project', 'images', 'encryptedSlug', 'newMessage'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        $title = 'Edit Project';
        $styles = Style::all();
        $types = Type::all();
        $cities = City::all();
        $images = json_decode($project->images ?? '[]', true);
        $newMessage = Message::where('status', 0)->count();

        $pondFiles = array_map(function ($img) {
            $path = storage_path('app/public/' . $img);
            $tempPath = public_path('storage/temp_files/' . basename($img));
            if (file_exists($path) && !file_exists($tempPath)) {
                copy($path, $tempPath);
                TemporaryFile::create([
                'image' => 'temp_files/' . basename($img),
            ]);
            }
            return [
                'source' => $img,
                'options' => [
                    'type' => 'local',
                    'file' => [
                        'name' => basename($img),
                        'size' => filesize($path),
                        'type' => File::mimeType($path),
                    ],
                    'metadata' => [
                        'poster' => asset('storage/' . $img),
                    ],
                ],
            ];
        }, $images);
        return view('admin.projects.edit', compact('title', 'project', 'styles', 'types', 'cities', 'pondFiles', 'newMessage'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'client_name' => 'required|max:255',
            'client_address' => 'required|max:255',
            'client_contact' => 'required|string|max:15',
            'type_id' => 'required|integer|exists:types,id',
            'style_id' => 'required|integer|exists:styles,id',
            'city_id' => 'required|integer|exists:cities,id',
            'cover_image' => 'image|file',
            'description' => 'required|string',
            'unit_size' => 'required|max:255',
            'job_list' => 'required|string',
            'material' => 'required|max:255',
            'worker' => 'required|string',
            'job_status' => 'required|in:waiting,in_progress,in_review,done,cancelled,rejected',
            'visibility' => 'required|in:public,private',
            'progress' => 'required|integer|between:0,100',
        ]);

        $temp_files = TemporaryFile::all();
        $images = [];

        if ($request->title != $project->title) {
            $validatedData['slug'] = generateUniqueSlug(Project::class, $validatedData['title']);
        } else {
            $validatedData['slug'] = $project->slug;
        }

        if ($request->file('cover_image')) {
            if ($request->oldCoverImage) {
                Storage::disk('public')->delete($request->oldCoverImage);
            }
            $validatedData['cover_image'] = $request->file('cover_image')->store('projects-cover-image/', 'public');
        }

        Storage::disk('public')->deleteDirectory('projects-images/' . $project->slug);
        foreach ($temp_files as $file) {
            $newPath = str_replace('temp_files', 'projects-images/' . $validatedData['slug'], $file->image);
            Storage::disk('public')->move($file->image, $newPath);
             array_push($images, $newPath);
            $file->delete();
        }

        $validatedData['images'] = json_encode($images);


        Project::where('slug', $project->slug)->update($validatedData);

        return redirect(route('projects.index'))->with('success', 'Data updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        if ($project->images) {
            Storage::disk('public')->deleteDirectory('projects-images/' . $project->slug);
        }
        if( $project->cover_image) {
            Storage::disk('public')->delete($project->cover_image);
        }
        project::destroy($project->id);
        return redirect(route('projects.index'))->with('success', 'Data deleted successfully.');
    }

    public function preview($encryptedSlug)
    {
        try {
            $title = 'Project Preview';
            $slug = Crypt::decryptString($encryptedSlug);
            $project = Project::where('slug', $slug)->firstOrFail();
            $images = json_decode($project->images ?? '[]', true);

            return view('admin.projects.preview', compact('title', 'project', 'images'));
            } catch (\Exception $e) {
            abort(404, 'Invalid link');
        }
    }
}