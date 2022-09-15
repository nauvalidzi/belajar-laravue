<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::select(['id', 'name', 'email', 'phone'])->get();

        return response()->json($users);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password)
        ]);

        return \response()->json([
            'success' => true,
            'message' => 'User has been processed successfully.',
            'user' => $user
        ]);
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
