<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo; 
use App\Models\User; 
class Message extends Model
{
    protected $fillable = [
        'user_id',
        'message'
    ];

       public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
