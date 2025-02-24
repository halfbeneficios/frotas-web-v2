<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AuthenticationLog extends Model
{

    protected $fillable = [
        'user_id',
        'logged_at',
        'ip',
        'headers',
        'server',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
