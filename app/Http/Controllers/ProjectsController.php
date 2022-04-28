<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index(){
        $projects = Project::orderBy('created_at', 'desc')->paginate(5);
        return view('projects.index',compact('projects'));
    }

    public function show(Project $project){
        return view('projects.show',compact('project'));
    }
}
