<?php

namespace App\Model;

use BinaryCabin\LaravelUUID\Traits\HasUUID;
use Illuminate\Database\Eloquent\Model;

class MessageGroupMember extends Model
{
    use HasUUID;

    protected $uuidFieldName = 'id';
    public $incrementing = false;

    protected $fillable = ['user_id', 'message_group_id', 'status'];

    public function message_group() {
        return $this->belongsTo(MessageGroup::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
