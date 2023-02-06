<?php

namespace App\Models;

use BinaryCabin\LaravelUUID\Traits\HasUUID;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    use HasFactory, HasUUID;

    protected $uuidFieldName = 'id';
    public $incrementing = false;
    
    protected $fillable = [
        'user_id',
        'address_id',
        'email',
        'email_verified_at',
        'waybill',
    ];
}
