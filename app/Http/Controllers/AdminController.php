<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Project;
use App\Models\Team;
use Illuminate\Http\Request;

class AdminController extends Controller
{
 public function index()
 {
    $title = 'Admin Dashboard';
    $teamCount = Team::count();
    $clientCount = Client::count();
    $projectCount = Project::count();
     return view('admin.index', compact('title', 'teamCount', 'clientCount', 'projectCount'));
 }
}
