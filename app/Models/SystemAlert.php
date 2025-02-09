<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SystemAlert extends Model
{

    protected $fillable = [
        'title',
        'message',
        'sending_type',
        'user_id',
        'is_send_all',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function system_alert_activities(): HasMany
    {
        return $this->hasMany(SystemAlertActivity::class);
    }

}
