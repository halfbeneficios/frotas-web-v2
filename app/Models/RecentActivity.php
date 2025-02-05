<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RecentActivity extends Model
{

    protected $fillable = [
        'user_id',
        'message',
        'ip',
        'headers',
        'server',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
