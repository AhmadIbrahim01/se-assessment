<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Project;

class ProjectController extends Controller
{
    public function add_project(Request $request){

        $project = Project::create([
            'name' => $request->$name,
            'description' => $request->$description,
        ]);

        return response()->json(['message' => 'Project created successfully', 'project' => $project], 201);
}
}
