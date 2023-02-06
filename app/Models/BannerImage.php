<?php

namespace App\Models;

use BinaryCabin\LaravelUUID\Traits\HasUUID;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BannerImage extends Model
{
    use HasFactory, SoftDeletes, HasUUID;

    protected $uuidFieldName = 'id';
    public $incrementing = false;

    protected $fillable = ['image', 'seller_id', 'category_id', 'type'];

    public $appends = ['image_url'];

    public function getImageUrlAttribute() {
        return env('APP_URL').'/bannerImages/'.$this->image;
    }
}
