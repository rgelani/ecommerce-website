<?php

namespace App\Models;

use BinaryCabin\LaravelUUID\Traits\HasUUID;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SellerCampaign extends Model
{
    use HasFactory,HasUUID;

    protected $uuidFieldName = 'id';
    public $incrementing = false;

    protected $fillable = [
        'name',
        'seller_id',
        'status',
        'type',
        'total_amount',
        'remaining_amount',
        'no_end_time',
        'start_time',
        'end_time'
    ];

    public function getFullEndTimeAttribute()
    {
        return $this->end_time . ' ' . date('H:i:s', strtotime($this->start_time));
    }

    public function products()
    {
        return $this->hasMany(SellerCampaignProduct::class,'campaign_id')->with('product');
    }
}
