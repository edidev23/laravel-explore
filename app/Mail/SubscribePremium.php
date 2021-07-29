<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SubscribePremium extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;
	public $name;
	public $package_name;
	public $package_limit;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $package_name, $package_limit)
    {
        $this->name = $name;
		$this->package_name = $package_name;
		$this->package_limit = $package_limit;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('[Stripe Sync by Acodei] Tier Upgrade Confirmation')->view('mail.subscribepremium');
    }
}
