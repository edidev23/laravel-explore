<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmailJob;
use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Mail;

class DataController extends Controller
{
    public function index()
    {
        $user = User::where("id", 1)->get();
        // dd($user);

        return view("page/test-data/index");
    }

    public function send_email()
    {
        SendEmailJob::dispatch()->delay(now()->addSeconds(5));

        return redirect("test-data");
     }
}
