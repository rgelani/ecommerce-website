<?php

namespace App\Models;

use BinaryCabin\LaravelUUID\Traits\HasUUID;
use Illuminate\Database\Eloquent\Model;

class MessageGroup extends Model
{
    use HasUUID;

    protected $uuidFieldName = 'id';
    public $incrementing = false;
    
    protected $fillable = ['user_id', 'name'];


    public function message_group_members() {
        return $this->hasMany(MessageGroupMember::class);
    }

    public function user_messages() {
        return $this->hasMany(UserMessage::class);
    }
}
