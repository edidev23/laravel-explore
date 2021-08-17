<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        // $users = DB::table('users')->select('id', 'name')->get();
        $users = User::all();

        // dump($users);
        return response()->json($users);
    }

    public function show($id)
    {
        // $user = DB::table('users')->where("id", $id)->first();
        $user = User::findorfail($id);

        // dump($user);
        return response()->json($user);
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            "name" => "required",
            "email" => "required|email",
            "password" => "required",
        ]);
        // $user = new User;
        // $user->name = $request->name;
        // $user->email = $request->email;
        // $user->password = Hash::make($request->password);
        // $user->save();

        // mask assignment
        $user = User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => Hash::make($request->password),
        ]);

        return response()->json([
            "status" => true,
            "message" => "Data user berhasil disimpan",
            "data" => $user,
        ]);
    }
}
