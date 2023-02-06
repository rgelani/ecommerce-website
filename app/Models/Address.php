<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use BinaryCabin\LaravelUUID\Traits\HasUUID;

class Address extends Model
{
    use HasFactory,HasUUID;

    protected $uuidFieldName = 'id';
    public $incrementing = false;

    protected $fillable = [
        'name', 'phone_no', 'address1', 'address2', 'address3', 'city_id', 'state_id', 'country_id', 'alternate_phone_no', 'type', 'pin_code'
    ];
    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function order()
    {
        return $this->hasMany(Order::class);
    }
    
    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }
}