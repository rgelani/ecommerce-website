<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SellerAccountDeactivationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $sellerAccountDeactivation;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($sellerAccountDeactivation)
    {
        $this->sellerAccountDeactivation = $sellerAccountDeactivation;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('seller.auth.email.seller-account-deactivation-email')->subject("I-Kart Online Selling Account is Deactivated")->with('sellerAccount', $this->sellerAccountDeactivation);
    }
}
