<?php

namespace App\Models;

use BinaryCabin\LaravelUUID\Traits\HasUUID;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SellerReferralAccount extends Model
{
    use HasFactory,HasUUID;

    protected $uuidFieldName = 'id';
    public $incrementing = false;

    protected $fillable = [
        'seller_id',
        'referral_seller_id',
        'bonus_status'
    ];
}
