<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class DashboardController extends Controller
{
    //index function to return dashboard page
    public function index()
    {
        //just for fun function
        //end (remove also the returned 'projects' if this string will be deleted, and the Project model as well)
        $projects = Project::all();

        return view('admin.home', compact('projects'));
    }
}
