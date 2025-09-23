<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Project;
use App\Models\Team;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $teams = Team::limit(4)->get();
        $clients = Client::limit(10)->latest()->get();
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

    public function contact()
    {
        return view('homepage.contact.index');
    }
}
