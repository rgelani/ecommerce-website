<?php

namespace App\Models;

use BinaryCabin\LaravelUUID\Traits\HasUUID;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HsnCode extends Model
{
    use HasFactory, HasUUID, SoftDeletes;

    protected $uuidFieldName = 'id';
    public $incrementing = false;

    protected $fillable = [ 'child_sub_category_id', 'code' ];

    public function childSubcategory () {
        return $this->belongsTo(ChildSubCategory::class, "child_sub_category_id", "id");
    }
}
