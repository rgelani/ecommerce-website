<?php

namespace App\Jobs;

use App\Mail\SendUserOtp;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class UserOtpEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $mailDetails;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($mailDetails)
    {
        $this->mailDetails = $mailDetails;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $mailDetails = [
            'email' => $this->mailDetails['email'],
            'otp' => $this->mailDetails['otp'],
        ];

        $otpSend = new SendUserOtp($mailDetails);
        Mail::to($this->mailDetails['email'])->send($otpSend);
    }
}
