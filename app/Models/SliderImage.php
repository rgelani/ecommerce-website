<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use BinaryCabin\LaravelUUID\Traits\HasUUID;
use Illuminate\Database\Eloquent\SoftDeletes;

class SliderImage extends Model
{
    use HasFactory,HasUUID,SoftDeletes;

    protected $uuidFieldName = 'id';
    public $incrementing = false;

    public $guarded = [];

    public $appends = ['image_url'];

    public function getImageUrlAttribute() {
        return env('APP_URL').'/sliderImages/'.$this->image;
    }

}
