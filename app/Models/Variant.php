<?php

namespace App\Models;

use BinaryCabin\LaravelUUID\Traits\HasUUID;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Variant extends Model
{
    use HasFactory, HasUUID;

    protected $uuidFieldName = 'id';
    public $incrementing = false;

    protected $fillable = ['product_id', 'sku', 'title', 'price', 'quantity', 'color', 'size', 'weight'];

    public function product()
    {
        return $this->hasOne(Product::class,'id','product_id')->with('seller');
    }

    public function variantImage()
    {
        return $this->hasOne(ProductVariantImage::class);
    }

    public function lineItems()
    {
        return $this->hasMany(Line_item::class);
    }
}