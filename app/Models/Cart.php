<?php

namespace App\Models;

use BinaryCabin\LaravelUUID\Traits\HasUUID;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cart extends Model
{
    use HasFactory,  HasUUID, SoftDeletes;

    protected $uuidFieldName = 'id';
    public $incrementing = false;

    protected $fillable = [ 'user_id', 'product_id', 'order_id', 'quantity' ];

    public function products()
    {
        return $this->belongsTo(Product::class, "product_id");
    }
}
