<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SellerAccountActivationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $sellerAccount;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($sellerAccount)
    {
        $this->sellerAccount = $sellerAccount;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('seller.auth.email.seller-account-email')->subject("Welcome to I-Kart Online Selling Platforms")->with('sellerAccount', $this->sellerAccount);
    }
}
