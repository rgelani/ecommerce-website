<?php

namespace App\Models;

use BinaryCabin\LaravelUUID\Traits\HasUUID;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SellerCampaignProduct extends Model
{
    use HasFactory,HasUUID;

    protected $uuidFieldName = 'id';
    public $incrementing = false;

    protected $fillable = [
        'campaign_id',
        'product_id',
        'cpc',
        'status',
        'active_keywords',
        'keywords'
    ];

    public function product()
    {
        return $this->hasOne(Product::class,'id','product_id');
    }
}
