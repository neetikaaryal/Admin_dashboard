<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function project()
    {
        return view('project_list');
    }

    public function create()
    {
        return view('add_project_list');
    }
    
    public function store(Request $request)
    {
        // $request->validate([
        //     'project_name' => 'required',
        //     'project_description' => 'required',
         
        // ]);
        $project = new Project;
        $project->name = $request->name;
        $project->description = $request->description;
        $project->save();
        return redirect('/project_list')->with('success', 'Project has been added');
    }
}
