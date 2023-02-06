<?php

namespace App\Models;

use BinaryCabin\LaravelUUID\Traits\HasUUID;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SubCategory extends Model
{
    use HasFactory, HasUUID, SoftDeletes;

    protected $uuidFieldName = 'id';

    public $incrementing = false;

    protected $fillable = [
        'category_id',
        'name'
    ];

    public function childSubCategory() {
        return $this->hasMany(ChildSubCategory::class, 'sub_category_id', 'id');
    }

}
