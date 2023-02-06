<?php

namespace App\Models;

use BinaryCabin\LaravelUUID\Traits\HasUUID;
use Illuminate\Database\Eloquent\Model;

class UserMessage extends Model
{
    use HasUUID;

    protected $uuidFieldName = 'id';
    public $incrementing = false;

    public function message()
    {
        return $this->belongsTo(Message::class);
    }
}
