<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\ClientCategory;
use App\Models\Project;
use App\Models\Team;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $teams = Team::limit(8)->get();
        $clients = Client::limit(5)->latest()->get();
        $projects = Project::limit(4)->latest()->get();
        return view('homepage.index', compact('teams', 'clients', 'projects'));
    }

    public function about()
    {
        return view('homepage.about.index');
    }

    public function project()
    {
        $projects = Project::latest()->get();
        return view('homepage.project.index', compact('projects'));
    }

    public function detailProject(Project $project)
    {
        $images = json_decode($project->images ?? '[]', true);
        return view('homepage.project.show', compact('project', 'images'));
    }

    public function contact()
    {
        return view('homepage.contact.index');
    }

    public function team()
    {
        $teams = Team::limit(8)->get();
        return view('homepage.team.index', compact('teams'));
    }

    public function client()
    {
        $clients = Client::with('category')->get();

        $datas = $clients->groupBy(fn($client) => $client->category->name)
                 ->map(fn($group) => $group->map(fn($c) => [
                     'name' => $c->name,
                     'logo' => $c->logo,
                     'category' => $c->category->name,
                 ]));

        return view('homepage.client.index', compact('datas'));
    }
}