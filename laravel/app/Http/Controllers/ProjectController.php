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

    public function list_projects(Request $request){
        $projects = Project::all();
        return response()->json($projects);
    }

    public function preview_project(Request $request, $id){
        $project = Project::find($id);
        if (!$project) {
            return response()->json(['message' => 'project not found'], 404);
        }
        return response()->json($project);
}

}
