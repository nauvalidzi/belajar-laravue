<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::select(['id', 'name', 'email', 'phone'])->get();

        return response()->json($users);
    }

    public function store(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);

        return \response()->json(['success' => true, 'message' => 'User has been processed successfully.']);
    }

    public function show($id)
    {
        $user = User::find($id);

        if (!$user) {
            return \response()->json(['status' => false, 'message' => 'User not found!']);
        }

        return \response()->json($user);
    }
}
