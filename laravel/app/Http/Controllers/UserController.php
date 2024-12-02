<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function add_user(){
    
        $user = User::create([
            'name' => $request->$name,
            'username' => $request->$username,
            'password' => $request->$password,
        ]);
    
        return response()->json(['message' => 'User created successfully', 'user' => $user], 201);
    }

    public function list_users(){
        $users = User::all();
        return response()->json($users);
    }

    public function preview_user($id){
        $user = User::find($id);
        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }
        return response()->json($user);
}

    public function edit_user(Request $request, $id){
        $user = User::find($id);
        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }

        $user->update([
            'name' => $request->$name,
            'username' => $request->$username,
            'password' => $request->$password,
        ]);

        return response()->json(['message' => 'User edited successfully', 'user' => $user]);
    }

    function delete_user($id){
        $user = User::find($id)->delete();

        return response()->json([
            "Deleted_user" => $user,
        ]);
    }
    
}
