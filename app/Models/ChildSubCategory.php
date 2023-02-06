<?php

namespace App\Models;

use BinaryCabin\LaravelUUID\Traits\HasUUID;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ChildSubCategory extends Model
{
    use HasFactory, HasUUID, SoftDeletes;

    protected $uuidFieldName = 'id';

    public $incrementing = false;

    protected $fillable = [
        'sub_category_id',
        'name'
    ];
}
