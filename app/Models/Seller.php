<?php

namespace App\Models;

use BinaryCabin\LaravelUUID\Traits\HasUUID;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Seller extends Authenticatable
{
    use HasFactory, Notifiable, HasUUID;

    protected $uuidFieldName = 'id';
    public $incrementing = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = ['first_name', 'profile_avatar', 'bank_name', 'last_name', 'pan_certificate', 'phone_number', 'email', 'status', 'password', 'company_name', 'gst_number', 'pan_number', 'bank_account_number', 'ifsc_code', 'business_address', 'business_type', 'cancel_cheque', 'pickup_address', 'gst_certificate', 'seller_referred_id', 'country_id', 'state_id', 'city_id', 'warehouse_id', 'is_hold'];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];



    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function product()
    {
        return $this->hasOne(Product::class);
    }
    public function lineItems()
    {
        return $this->hasMany(Line_item::class);
    }
}