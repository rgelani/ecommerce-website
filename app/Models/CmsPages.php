<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CmsPages extends Model
{
    protected $table = 'cmspages';
    use HasFactory;

    protected $fillable = [
        'id',
        'seller_id',
        'title',
        'slug',
        'description',
        'parent_id',
        'icon_class',
        'is_active',
    ];
}
