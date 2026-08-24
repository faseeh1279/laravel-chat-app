<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        'username',
        'message'
    ];

    // public function sender(){ 
    //     return $this->belongsTo(User::class, 'sender_id'); 
    // }
}
