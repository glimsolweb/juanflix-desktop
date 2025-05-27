<?php

namespace App\Jobs;

use App\Mail\CancelMembershipMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;

class CancelMembershipMailJob implements ShouldQueue
{
    use Queueable;

    public $email;

    /**
     * Create a new job instance.
     */
    public function __construct($email)
    {
        $this->email = $email;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Mail::to($this->email)->send(new CancelMembershipMail);
    }
}
