<?php

namespace App\Models;

use BinaryCabin\LaravelUUID\Traits\HasUUID;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes, HasUUID;

    protected $uuidFieldName = 'id';
    public $incrementing = false;

    protected $fillable = [
        'category_id',
        'seller_id',
        'sku',
        'MRP',
        'selling_price',
        // 'HSN_code',
        'hsn_id',
        'GST',
        'dispatch_in_day',
        'quantity',
        'local_delivery_charge',
        'zonal_delivery_charge',
        'national_delivery_charge',
        'weight',
        'length',
        'width',
        'height',
        'title',
        'manufacturer',
        'brand_name',
        'description',
        'keyword',
        'key_features',
        'meta_tags',
        'return_order',
        'return_order_in_date',
        'sale_price',
        'sale_start_data',
        'sale_end_data',
        'country_of_origin',
        'status',
        'sub_category_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class)->withTrashed();
    }

    public function variants()
    {
        return $this->hasMany(Variant::class)->with('variantImage');
    }

    public function productImage()
    {
        return $this->hasOne(ProductVariantImage::class);
    }

    public function seller()
    {
        return $this->belongsTo(Seller::class);
    }

    public function lineItems()
    {
        return $this->hasMany(Line_item::class);
    }
}