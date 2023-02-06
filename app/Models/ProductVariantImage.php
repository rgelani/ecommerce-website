<?php

namespace App\Models;

use BinaryCabin\LaravelUUID\Traits\HasUUID;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductVariantImage extends Model
{
    use HasFactory, HasUUID;

    protected $uuidFieldName = 'id';
    public $incrementing = false;

    protected $fillable = ['product_id', 'variant_id', 'src', 'alt'];

    public function productImage()
    {
        return $this->belongsTo(Product::class);
    }
    public function variantImage()
    {
        return $this->belongsTo(Product::class);
    }
}