<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'seller_id',
        'title',
        'slug',
        'parent_id',
        'icon_class',
        'is_active',
        'is_delete',
    ];
}
