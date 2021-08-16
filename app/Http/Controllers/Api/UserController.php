<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $users = DB::table('users')->select('id', 'name')->get();

        // dump($users);
        return response()->json($users);
    }

    public function show($id)
    {
        $user = DB::table('users')->where("id", $id)->first();

        // dump($user);
        return response()->json($user);
    }
}
