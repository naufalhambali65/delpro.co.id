<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Message;
use App\Models\Project;
use App\Models\Team;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        App::setLocale('en');
    }

    public function index()
    {
        $title = 'Admin Dashboard';
        $teamCount = Team::count();
        $clientCount = Client::count();
        $projectCount = Project::count();
        $messageCount = Message::count();
        $newMessage = Message::where('status', 0)->count();
        return view('admin.index', compact('title', 'teamCount', 'clientCount', 'projectCount', 'messageCount', 'newMessage'));
    }
}
