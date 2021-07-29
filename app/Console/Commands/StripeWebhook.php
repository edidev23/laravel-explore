<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class StripeWebhook extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:sendemail';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $user = \App\Models\User::where("id", 1)->first();

        Mail::to($user->email)->send(new \App\Mail\SendMessage($user->name, "email from console laravel"));

        // to test work 
        // php artisan command:sendmail
        // to schedule
        // php artisan schedule:work
    }
}
