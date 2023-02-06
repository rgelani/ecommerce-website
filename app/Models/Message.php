<?php

namespace App\Models;

use BinaryCabin\LaravelUUID\Traits\HasUUID;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasUUID;

    protected $uuidFieldName = 'id';
    public $incrementing = false;

    public function user_messages()
    {
        return $this->hasMany(UserMessage::class);
    }

    public function users()
    {
        return $this->belongsToMany(
            User::class,
            'user_messages',
            'message_id',
            'sender_id'
        )
            ->withTimestamps();
    }

    public function sellers()
    {
        return $this->belongsToMany(
            Seller::class,
            'user_messages',
            'message_id',
            'sender_id'
        )
            ->withTimestamps();
    }


    public function admins()
    {
        return $this->belongsToMany(
            Admin::class,
            'user_messages',
            'message_id',
            'sender_id'
        )
            ->withTimestamps();
    }
}
