<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return response()->json(["data" => User::all()]);
    }

    public function store(Request $request)
    {
        
    }

    public function show(User $user)
    {
        return response()->json(["data" => $user]);
    }

    public function update(Request $request, User $user)
    {
        
    }

    public function destroy(User $user)
    {
        $user->delete();
        return response("", 204);
    }
}
