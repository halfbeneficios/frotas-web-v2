<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SystemAlertActivity extends Model
{

    protected $fillable = [
        'system_alert_id',
        'user_id',
        'completed',
    ];

    public function system_alert(): BelongsTo
    {
        return $this->belongsTo(SystemAlert::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
