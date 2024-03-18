<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Experience;

class ExperienceController extends Controller
{
    public function experience()
    {
        return view('experience_list');
    }

    public function create()
    {
        return view('add_experience_list');
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'project_name' => 'required',
        //     'project_description' => 'required',

        // ]);
        $experience = new Experience;
        $experience->name = $request->name;
        $experience->description = $request->description;
        $experience->save();
        return redirect('/experience_list')->with('success', 'Experience has been added');
    }
}
