<?php

namespace App\Models;

use BinaryCabin\LaravelUUID\Traits\HasUUID;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Config;

class Category extends Model
{
    use HasFactory, SoftDeletes, HasUUID;

    protected $uuidFieldName = 'id';
    public $incrementing = false;

    protected $fillable = ['name', 'parent_id', 'slug', 'status', 'is_on_home_page', 'image', 'icon', 'HSN_code', 'id'];

    public $appends = ['image_url'];

    public function getImageUrlAttribute()
    {
        $image_path = URL(Config::get('constants.image_path.category_image') . $this->image);
        if (!file_exists($image_path)) {
            return URL(Config::get('constants.image_path.category_image').'no-category-image.jpg');
        }else{
            return $image_path;
        }
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id', 'id')->with('parent');
    }

    public function child()
    {
        return $this->hasMany(Category::class,  'id', 'parent_id')->with('child')->with('parent');
    }

    public function subCategory()
    {
        return $this->hasMany(SubCategory::class, 'category_id', 'id');
    }
}
