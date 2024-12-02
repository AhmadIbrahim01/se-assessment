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


}
