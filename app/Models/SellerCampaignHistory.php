<?php

namespace App\Models;

use BinaryCabin\LaravelUUID\Traits\HasUUID;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SellerCampaignHistory extends Model
{
    use HasFactory,HasUUID;

    protected $uuidFieldName = 'id';
    public $incrementing = false;

    protected $fillable = [
        'seller_id',
        'amount',
        'description',
        'status',
        'transaction_type',
        'razorpay_payment_id',
        'currency',
        'method',
        'card_id',
        'name',
        'email',
        'contact',
        'last4',
        'network',
        'type',
        'issuer',
    ];
}
