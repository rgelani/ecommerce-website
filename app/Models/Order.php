<?php

namespace App\Models;

use BinaryCabin\LaravelUUID\Traits\HasUUID;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory, HasUUID;

    protected $uuidFieldName = 'id';
    public $incrementing = false;

    protected $fillable = [
        'address_id',
        'email',
        'total',
        'total_gst',
        'shiping_charge',
        'status',
        'shipping_mode',
        'payment_mode',

    ];


    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function address()
    {
        return $this->belongsTo(Address::class)->with('state');
    }

    public function lineItems()
    {
        return $this->hasMany(Line_item::class);
    }
}