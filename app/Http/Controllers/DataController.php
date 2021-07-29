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
        $user = User::where("id", 1)->first();

        // SEND EMAIL
        Mail::to($user->email)->send(new \App\Mail\SubscribePremium($user->name, "package name", "package limit"));

        return redirect("test-data");
    }

    public function send_job()
    {
        $user = User::where("id", 1)->first();

        $job = new \App\Jobs\SendEmailJob($user);
        dispatch($job);

        return redirect("test-data");

        // SendEmailJob::dispatch($user)->delay(now()->addSeconds(5));
    }
}
