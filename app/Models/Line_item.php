<?php

namespace App\Models;

use BinaryCabin\LaravelUUID\Traits\HasUUID;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Line_item extends Model
{
    use HasFactory, HasUUID;

    protected $uuidFieldName = 'id';
    public $incrementing = false;

    protected $fillable = [
        'variant_id',
        'product_id',
        'seller_id',
        'order_id',
        'wbns',
        'quantity',
        'tax_total',
        'selling_price',
        'sku',
        'barcode',
        'oid_barcode',
        'image',
        'title',
        'discription',
        'upload_wbn',
        'weight',
        'status',
        'shiping_charge',
        'penalty',
        'total_price'
    ];

    public function order()
    {
        return $this->belongsTo(order::class)->with(['address', 'users']);
    }

    public function variant()
    {
        return $this->belongsTo(Variant::class);
    }

    public function product()
    {
        return $this->belongsTo(product::class);
    }
    public function seller()
    {
        return $this->belongsTo(Seller::class);
    }
}